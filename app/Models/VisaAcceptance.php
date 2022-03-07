<?php

namespace App\Models;

use App\Custom\Contracts\ImageableContract;
use App\Custom\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaAcceptance extends Model implements ImageableContract
{
    use Imageable;
    use HasFactory;

    protected $guarded = ['id'];

    public $columnsWithTypes = [
        'background_image'  => 'image',
        'image'             => 'image',
        'name'              => 'string',
        'country'           => 'string',
        'exam_score'        => 'string',

    ];

    public function country()
    {
        return $this->belongsTo(StudyAbroad::class,'country','id');
    }
}
