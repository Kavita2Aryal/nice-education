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
        'image'            => 'image',
        'name'             => 'string',
        'slug'             => 'string',
        'title'            => 'string',
        'description'      => 'string',
        'priority'         => 'string',
        'status'           => 'boolean',

    ];

    public function getBannerImageAttribute($value): string
    {
        return  asset('storage/images/service/banner_images/'.$value);
    }
}
