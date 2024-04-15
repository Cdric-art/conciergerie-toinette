<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServicesCategory;
use App\Models\ServicesPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);

        $imageName = $request->file('image')->getClientOriginalName();
        $request->image->storeAs('images', $imageName);

        ServicesPost::create([
            "servicesCategory_id" => $request->get('category_id'),
            "title" => $request->get('title'),
            "content" => $request->get('content'),
            "second_content" => $request->get('second_content'),
            "post_scriptum" => $request->get('post_scriptum'),
            "price" => $request->get('price'),
            "image" => $imageName,
        ])->save();

        return redirect(route('services', $request->get('category_id')))->with('success', "Le service à bien été crée.");
    }

    public function edit(ServicesPost $service): View
    {
        return view('dashboard.edit-service', [
            "service" => $service
        ]);
    }

    public function update(Request $request, ServicesPost $service): RedirectResponse
    {
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            if(Storage::get('images/' . $service->image)) {
                Storage::delete('images/' . $service->image);
            }
            $request->image->storeAs('images', $imageName);

            $service->update([
                "image" => $imageName,
            ]);

            $service->save();
        }

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $service->update([
            "title" => $request->get('title'),
            "content" => $request->get('content'),
            "second_content" => $request->get('second_content'),
            "post_scriptum" => $request->get('post_scriptum'),
            "price" => $request->get('price'),
            "updated_at" => time(),
        ]);

        $service->save();

        return redirect(route('services', $service->servicesCategory_id))->with('success', "Le service à bien été modifié.");
    }

    public function destroy(ServicesPost $service): RedirectResponse
    {
        if(Storage::get('images/' . $service->image)) {
            Storage::delete('images/' . $service->image);
        }

        ServicesPost::destroy($service->id);
        return redirect(route('services', $service->servicesCategory_id))->with('success', "Le service à bien été supprimé.");
    }
}
