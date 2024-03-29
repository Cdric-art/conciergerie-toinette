<?php

namespace App\Http\Controllers;

use App\Models\ServicesCategory;
use App\Models\ServicesPost;
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

    public function show(ServicesCategory $category): View
    {
        $services = ServicesPost::where('servicesCategory_id', $category->id)->get();
        return view('services-au-quotidien.block-services', [
            "services" => $services
        ]);
    }
}
