<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class HomePostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('dashboard', [
            "homePosts" => HomePost::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('images'), $imageName);

        }

        HomePost::create([
            "title" => $request->get('title'),
            "content" => $request->get('content'),
            "inverseContent" => $request->get('inverseContent') ?? false,
            "image" => $imageName ?? null,
        ])->save();

        return redirect(route('dashboard'))->with('success', "Le post à bien été crée.");
    }

    /**
     * Display the specified resource.
     */
    public function show(HomePost $homePost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomePost $homePost): View
    {
        return view('homepost.edit-post', [
            "homePost" => $homePost
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomePost $homePost): RedirectResponse
    {
        if ($request->hasFile('image')) {
            $img_path = public_path('images/' . $homePost->image);
            File::delete($img_path);

            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('images'), $imageName);

            $homePost->update([
                "image" => $imageName,
            ]);

            $homePost->save();
        }

        $homePost->update([
            "title" => $request->get('title'),
            "content" => $request->get('content'),
            "inverseContent" => $request->get('inverseContent') ?? false,
            "updated_at" => time(),
        ]);

        $homePost->save();

        return redirect(route('dashboard'))->with('success', "Le post à bien été modifié.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomePost $homePost): RedirectResponse
    {
        $img_path = public_path('images/' . $homePost->image);
        File::delete($img_path);

        HomePost::destroy($homePost->id);
        return redirect(route('dashboard'))->with('success', "Le post à bien été supprimé.");
    }
}
