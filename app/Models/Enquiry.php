<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public $columnsWithTypes = [
        'first_name' => 'string',
        'last_name'  => 'string',
        'email_address' => 'string',
        'mobile_number' => 'date',
        'question_about' => 'json',
        'preferred_country' => 'json',
        'question' => 'string',
    ];

}
