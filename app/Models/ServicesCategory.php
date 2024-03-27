<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ServicesPost> $servicesPost
 * @property-read int|null $services_post_count
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesCategory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
