<?php

namespace App\Http\Controllers;

use App\Models\HomePost;
use Illuminate\View\View;

class welcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * sortDesc()
     */
    public function index(): View
    {
        $homePosts = HomePost::All();
        return view('welcome', [
            'homePosts' => $homePosts
        ]);
    }

}
