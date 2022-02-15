<?php

namespace App\Models;

use App\Custom\Contracts\ImageableContract;
use App\Custom\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model implements ImageableContract
{
    use Imageable;
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title','slug','description'
    ];

    public $columnsWithTypes = [
        'title'             => 'string',
        'slug'             => 'string',
        'status'            => 'boolean',
        'image'            => 'image',
        'description' => 'string',

    ];

}
