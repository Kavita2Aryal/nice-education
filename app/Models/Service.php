<?php

namespace App\Models;

use App\Custom\Contracts\ImageableContract;
use App\Custom\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model implements ImageableContract
{
    use Imageable;
    use HasFactory;

    protected $guarded = ['id'];

    public $columnsWithTypes = [
        'parent_id' => 'string',
        'title'            => 'string',
        'slug'             => 'string',
        'banner_image'     => 'image',
        'description'      => 'string',
        'status'           => 'boolean',

    ];

    public function getBannerImageAttribute($value): string
    {
        return  asset('storage/images/service/banner_images/'.$value);
    }
}
