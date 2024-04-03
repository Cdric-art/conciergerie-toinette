<?php

namespace App\Http\Controllers;

use App\Models\PostConciergerieAirbnb;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConciergerieAirbnbController extends Controller
{
    public function index(): View
    {
        return view('conciergerie-airbnb.conciergerie-airbnb', [
            'posts' => PostConciergerieAirbnb::all(),
        ]);
    }
}
