<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Service;
use App\Models\StudyAbroad;
use App\Models\TestPreparation;
use App\Models\University;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    protected $website = [];


    public function __construct()
    {
            $this->website['countries'] = StudyAbroad::select('country_name','id','slug')->get();
            $this->website['company'] = Company::firstOrFail();
            $this->website['universities'] =University::orderBy('priority','desc')->get();
            $this->website['services'] = Service::select('id','image','name','slug','title','description','bg_colour')->orderBy('priority','asc')->get();
            $this->website['test_preparations'] = TestPreparation::select('id','title','slug')->get();

    }
}
