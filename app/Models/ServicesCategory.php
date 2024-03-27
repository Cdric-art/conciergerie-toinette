<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'image'
    ];

    public function servicesPost(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ServicesPost::class);
    }
}
