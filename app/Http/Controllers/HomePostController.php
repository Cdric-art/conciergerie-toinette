<?php

namespace App\Http\Controllers;

use App\Models\HomePost;
use Faker\Core\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HomePostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() :View
    {
        $homePosts = HomePost::All();
        return view('dashboard', compact('homePosts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) :RedirectResponse
    {

        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('images'), $imageName);

        }

        $homePost = new HomePost([
            "title" => $request->get('title'),
            "content" => $request->get('content'),
            "inverseContent" => $request->get('inverseContent') ?? false,
            "image" => $imageName ?? null,
        ]);

        $homePost->save();

        return redirect(route('dashboard'));
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
    public function edit(string $homePost) :View
    {
        $homePost = HomePost::query()->find($homePost);
        return view('homepost.edit-post', compact('homePost'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomePost $homePost) :RedirectResponse
    {
        if ($request->hasFile('image')) {
            $img_path = public_path('images/' . $homePost->image);
            \Illuminate\Support\Facades\File::delete($img_path);

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

        return redirect(route('dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomePost $homePost) :RedirectResponse
    {
        $img_path = public_path('images/' . $homePost->image);
        \Illuminate\Support\Facades\File::delete($img_path);

        HomePost::destroy($homePost->id);
        return redirect(route('dashboard'));
    }
}
