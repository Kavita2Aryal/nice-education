<?php

namespace App\Models;

use App\Custom\Contracts\ImageableContract;
use App\Custom\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestExam extends Model implements ImageableContract
{
    use Imageable;
    use HasFactory;

    protected $guarded = ['id'];

    public $columnsWithTypes = [
        'test_preparation_id'   => 'string',
        'exam_title'            => 'string',
        'exam_detail'           => 'string',
    ];
}
