<?php

namespace App\Models;

use App\Custom\Contracts\ImageableContract;
use App\Custom\Contracts\FileableContract;
use App\Custom\Traits\Fileable;
use App\Custom\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPreparation extends Model implements ImageableContract , FileableContract
{
    use Imageable;
    use Fileable;
    use HasFactory;

    protected $guarded = ['id'];

    public $columnsWithTypes = [
        'parent_id'        => 'string',
        'title'            => 'string',
        'slug'             => 'string',
        'document'         => 'file',
        'banner_image'     => 'image',

        'overview_title'       => 'string',
        'overview_description' => 'string',
        'overview_image'       => 'image',

        'preparation_title'       => 'string',
        'preparation_description' => 'string',
        'preparation_right_image' => 'image',
        'preparation_left_image'  => 'image',
        'reading_practice_title'       => 'string',
        'reading_practice'       => 'string',
        'speaking_practice_title'       => 'string',
        'speaking_practice'       => 'string',
        'listening_practice_title'       => 'string',
        'listening_practice'       => 'string',
        'writing_practice_title'       => 'string',
        'writing_practice'       => 'string',

        'format_title'       => 'string',
        'format_description' => 'string',
        'reading_pattern' => 'string',
        'listening_pattern' => 'string',
        'writing_pattern' => 'string',
        'speaking_pattern' => 'string',

        'status'             => 'boolean',
    ];

}
