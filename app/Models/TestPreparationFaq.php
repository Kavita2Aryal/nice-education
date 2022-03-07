<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPreparationFaq extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $columnsWithTypes = [
        'type'      =>'string',
        'type_id'   => 'string',
        'question'  => 'string',
        'answer'    => 'string',
    ];
}
