<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentRequired extends Model
{
    use HasFactory;

    public $columnsWithTypes = [
        'name'             => 'string',
    ];
}
