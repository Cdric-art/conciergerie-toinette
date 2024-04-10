<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostConciergerieAirbnb;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class PostConciergerieAirbnbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('dashboard.conciergerie', [
            "posts_conciergerie_airbnb" => PostConciergerieAirbnb::all()
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

        PostConciergerieAirbnb::create([
            "slug" => $request->get('slug'),
            "title" => $request->get('title'),
            "subtitle" => $request->get('subtitle'),
            "content" => $request->get('content'),
            "inverseContent" => $request->get('inverseContent') ?? false,
            "showNavigation" => $request->get('showNavigation') ?? false,
            "image" => $imageName ?? null,
        ])->save();

        return redirect(route('conciergerie'))->with('success', "Le post à bien été crée.");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostConciergerieAirbnb $post): View
    {
        return view('dashboard.edit-post-conciergerie-airbnb', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostConciergerieAirbnb $post): RedirectResponse
    {

        if ($request->hasFile('image')) {
            $img_path = public_path('images/' . $post->image);
            File::delete($img_path);

            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('images'), $imageName);

            $post->update([
                "image" => $imageName,
            ]);

            $post->save();
        }

        $post->update([
            "slug" => $request->get('slug'),
            "title" => $request->get('title'),
            "subtitle" => $request->get('subtitle'),
            "content" => $request->get('content'),
            "inverseContent" => $request->get('inverseContent') ?? false,
            "showNavigation" => $request->get('showNavigation') ?? false,
            "updated_at" => time(),
        ]);

        $post->save();

        return redirect(route('conciergerie'))->with('success', "Le post à bien été modifié.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostConciergerieAirbnb $post): RedirectResponse
    {
        $img_path = public_path('images/' . $post->image);
        File::delete($img_path);

        PostConciergerieAirbnb::destroy($post->id);
        return redirect(route('conciergerie'))->with('success', "Le post à bien été supprimé.");
    }
}
