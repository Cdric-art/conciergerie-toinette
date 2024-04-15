<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServicesCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ServicesCategoryController extends Controller
{
    public function index(): View
    {

        return view('dashboard.service-category', [
            "categories" => ServicesCategory::all(),
        ]);
    }

    public function store(Request $request, ServicesCategory $category): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        $imageName = $request->file('image')->getClientOriginalName();
        $request->image->storeAs('images', $imageName);

        ServicesCategory::create([
            "title" => $request->get('title'),
            "image" => $imageName,
        ])->save();

        return redirect(route('category'))->with('success', "La catégorie à bien été crée.");
    }

    public function edit(ServicesCategory $category) :View
    {
        return view('dashboard.edit-service-category', [
            "category" => $category
        ]);
    }

    public function update(Request $request, ServicesCategory $category): RedirectResponse
    {
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            if(Storage::get('images/' . $category->image)) {
                Storage::delete('images/' . $category->image);
            }
            $request->image->storeAs('images', $imageName);

            $category->update([
                "image" => $imageName,
            ]);

            $category->save();
        }

        $category->update([
            "title" => $request->get('title'),
            "updated_at" => time(),
        ]);

        $category->save();

        return redirect(route('category'))->with('success', "La catégorie à bien été modifié.");
    }

    public function destroy(ServicesCategory $category): RedirectResponse
    {
        if(Storage::get('images/' . $category->image)) {
            Storage::delete('images/' . $category->image);
        }

        ServicesCategory::destroy($category->id);
        return redirect(route('category'))->with('success', "La catégorie à bien été supprimé.");
    }
}
