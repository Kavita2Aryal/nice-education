<?php

namespace App\Models;

use App\Custom\Contracts\ImageableContract;
use App\Custom\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model implements ImageableContract
{
    use HasFactory;
    use Imageable;

    public $columnsWithTypes = [
        'category_id'     => 'string',
        'title'           => 'string',
        'slug'            => 'string',
        'description'     => 'string',
        'image'           => 'image',
        'video_link'      => 'string',
        'order'           => 'string',
        'hide'            => 'boolean',

    ];

    public function category()
    {
       return $this->belongsTo(NewsCategory::class,'category_id');
    }
}
