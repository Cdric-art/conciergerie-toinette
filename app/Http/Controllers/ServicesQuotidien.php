<?php

namespace App\Http\Controllers;

use App\Models\ServicesCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServicesQuotidien extends Controller
{
    public function index(): View
    {
        return view('services-au-quotidien.services-au-quotidien', [
            "categories" => ServicesCategory::all(),
        ]);
    }
}
