<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $content
 * @property string|null $image
 * @property int $inverseContent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HomePost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomePost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomePost query()
 * @method static \Illuminate\Database\Eloquent\Builder|HomePost whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomePost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomePost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomePost whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomePost whereInverseContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomePost whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomePost whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HomePost extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'content',
        'image',
        'inverseContent',
        'createdAt',
        'updatedAt'
    ];

}
