<?php

namespace App\Models;

use App\Custom\Contracts\ImageableContract;
use App\Custom\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model implements ImageableContract
{
    use HasFactory;
    use Imageable;


    public $columnsWithTypes = [
        'name'  => 'string',
        'slug'  => 'string',
        'image' => 'image',
        'order' => 'string',
        'hide'  => 'boolean',

    ];
}
