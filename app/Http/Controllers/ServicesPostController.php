<?php

namespace App\Http\Controllers;

use App\Models\ServicesCategory;
use App\Models\ServicesPost;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServicesPostController extends Controller
{
    public function index(ServicesCategory $category): View
    {
        $services = ServicesPost::where('servicesCategory_id', $category->id)->get();
        return view('dashboard.service-post', [
            "services" => $services,
            "category" => $category
        ]);
    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
