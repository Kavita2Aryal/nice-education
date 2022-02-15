<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    protected $website = [];
    protected $paginationLimit = 10;

    public function __construct()
    {
        if (!request()->ajax()) {
            $this->website['company'] = Company::firstOrFail();
        }
    }



}
