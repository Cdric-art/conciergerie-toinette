<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesPost extends Model
{
    use HasFactory;

    protected $fillable = [

        'title', 'content', 'post_scriptum', 'image', 'price', 'servicesCategory_id'

    ];

    public function servicesCategory(): \Illuminate\Database\Eloquent\Relations\BelongsTo

    {

        return $this->belongsTo(ServicesCategory::class);

    }
}
