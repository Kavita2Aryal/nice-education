<?php

namespace App\Models;

use App\Custom\Contracts\ImageableContract;
use App\Custom\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model implements ImageableContract
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
        'country_id','name','logo','priority'
    ];

    public $columnsWithTypes = [
        'country_id'             => 'string',
        'name'                   => 'string',
        'logo'                   => 'image',
        'priority'            => 'string',
        'status'            => 'boolean',
    ];

    public function country()
    {
        return $this->belongsTo(StudyAbroad::class,'country_id');
    }
}
