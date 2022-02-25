<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    protected $website = [];

    public function __construct()
    {
        if (!request()->ajax()) {
            $this->website['company'] = Company::firstOrFail();
        }
    }
}
