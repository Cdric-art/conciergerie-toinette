<?php

namespace App\Http\Controllers;

use App\Models\PostConciergerieAirbnb;
use Illuminate\Http\Request;
use Illuminate\View\View;
use function PHPUnit\Framework\isEmpty;

class ConciergerieAirbnbController extends Controller
{
    public function index(): View
    {
        return view('conciergerie-airbnb.conciergerie-airbnb', [
            'posts' => PostConciergerieAirbnb::all(),
        ]);
    }

    public function show(PostConciergerieAirbnb $post): View
    {
        $slug = $post->slug;

        $posts_as_slug = PostConciergerieAirbnb::all()->where('slug', '=', $slug);

        return view('conciergerie-airbnb.conciergerie-airbnb-post', [
            'posts' => $posts_as_slug,
        ]);
    }
}
