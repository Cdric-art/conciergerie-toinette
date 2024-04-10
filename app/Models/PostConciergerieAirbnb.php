<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostConciergerieAirbnb extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'slug',
        'title',
        'subtitle',
        'content',
        'image',
        'inverseContent',
        'showNavigation',
        'createdAt',
        'updatedAt'
    ];
}
