<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnquiryRequest;
use App\Models\Company;
use App\Models\StudyAbroad;
use App\Services\EnquiryService;
use Illuminate\Http\Request;

class WebsiteController extends CommonController
{
    /**
     * @var EnquiryService
     */
    private $enquiryService;

    public function __construct(EnquiryService $enquiryService)
    {
        parent::__construct();
        $this->enquiryService = $enquiryService;
    }

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
        $this->website['contact_us'] = Company::select('title_for_contact_us','description_for_contact_us')->first();
        return view("website.contact_us", $this->website);
    }

    public function enquiry(EnquiryRequest $request)
    {
        $data = $request->validated();
        $enquiry = $this->enquiryService->store($data);

        return redirect(url()->previous() .'#enquiry')->with('success', 'Your Query has been sent successfully');
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
