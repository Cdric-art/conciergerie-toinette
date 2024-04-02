<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ConciergerieAirbnbController extends Controller
{
    public function index(): View
    {
        return view('conciergerie-airbnb.conciergerie-airbnb');
    }
}
