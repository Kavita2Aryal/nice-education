<?php

namespace App\Models;

use App\Custom\Contracts\ImageableContract;
use App\Custom\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPreparationFaq extends Model implements ImageableContract
{
    use HasFactory;
    use Imageable;

    protected $guarded = ['id'];

    public $columnsWithTypes = [
        'test_preparation_id'   => 'string',
        'question'              => 'string',
        'answer'           => 'string',
    ];
}
