<?php

namespace App\Http\Controllers;

use App\Models\ConciergerieAirbnb;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConciergerieAirbnbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('dashboard.conciergerie-airbnb');
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
    public function show(ConciergerieAirbnb $conciergerieAirbnb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ConciergerieAirbnb $conciergerieAirbnb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ConciergerieAirbnb $conciergerieAirbnb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ConciergerieAirbnb $conciergerieAirbnb)
    {
        //
    }
}
