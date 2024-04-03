<?php

namespace App\View\Components;

use App\Models\PostConciergerieAirbnb;
use App\Models\ServicesCategory;
use Illuminate\View\Component;
use Illuminate\View\View;

class HomeLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.home', [
            'categories' => ServicesCategory::all(),
            'posts_conciergerie_airbnb' => PostConciergerieAirbnb::all(),
        ]);
    }
}
