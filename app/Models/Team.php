<?php

namespace App\Models;

use App\Custom\Contracts\ImageableContract;
use App\Custom\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model implements ImageableContract
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
        'image','name','designation','message'
    ];

    public $columnsWithTypes = [
        'image'       => 'image',
        'name'        => 'string',
        'designation' => 'string',
        'message'     => 'string',

    ];

}
