<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends CommonController
{
    public function index()
    {
        return view("website.index", $this->website);
    }

    public function aboutUs()
    {
        return view("website.about_us", $this->website);
    }

    public function contactUs()
    {
        return view("website.contact_us", $this->website);
    }

    public function ourServices()
    {
        return view("website.our_services", $this->website);
    }

    public function testPreparation()
    {
        return view("website.test_preparation", $this->website);
    }

    public function studyAbroad()
    {
        return view("website.study_abroad", $this->website);
    }
}
