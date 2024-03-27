<?php

namespace App\Http\Controllers;

use App\Models\ServicesCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class ServicesCategoryController extends Controller
{
    public function index(): View
    {

        return view('dashboard.service-category', [
            "categories" => ServicesCategory::all(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        $imageName = time() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('images'), $imageName);

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
            $img_path = public_path('images/' . $category->image);
            File::delete($img_path);

            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('images'), $imageName);

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
        $img_path = public_path('images/' . $category->image);
        File::delete($img_path);

        ServicesCategory::destroy($category->id);
        return redirect(route('category'))->with('success', "La catégorie à bien été supprimé.");
    }
}
