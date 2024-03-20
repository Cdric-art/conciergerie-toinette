<?php

namespace App\Http\Controllers;

use App\Models\HomePost;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomePostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() :View
    {
        $homePosts = HomePost::All();
        return view('dashboard', [
            'homePosts' => $homePosts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(HomePost $homePost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomePost $homePost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomePost $homePost)
    {
        //
    }
}
