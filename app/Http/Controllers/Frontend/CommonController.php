<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\StudyAbroad;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    protected $website = [];

    public function __construct()
    {
        if (!request()->ajax()) {
            $this->website['countries'] = StudyAbroad::select('country_name')->get();
            $this->website['company'] = Company::firstOrFail();
        }
    }
}
