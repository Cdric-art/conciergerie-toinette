<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $servicesCategory_id
 * @property string $title
 * @property string $content
 * @property string|null $post_scriptum
 * @property string $image
 * @property string|null $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ServicesCategory|null $servicesCategory
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesPost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesPost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesPost query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesPost whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesPost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesPost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesPost whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesPost wherePostScriptum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesPost wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesPost whereServicesCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesPost whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServicesPost whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
