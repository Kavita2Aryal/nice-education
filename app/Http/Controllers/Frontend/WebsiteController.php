<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnquiryRequest;
use App\Models\Company;
use App\Models\DocumentRequired;
use App\Models\HowItWork;
use App\Models\Page;
use App\Models\Service;
use App\Models\StudyAbroad;
use App\Models\Team;
use App\Models\TestPreparation;
use App\Models\VisaAcceptance;
use App\Models\WhyUs;
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
        $this->website['about_us'] = Page::findOrFail(1);
        $this->website['visaAcceptances'] = VisaAcceptance::latest()->limit(12)->get();
        return view("website.index", $this->website);
    }

    public function aboutUs()
    {
        $this->website['about_us'] = Page::findOrFail(1);
        $this->website['whyUs'] = WhyUs::get();
        $this->website['teams'] = Team::get();
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

    public function serviceDetail($id,$slug)
    {
        if ($id == 1) {
            $this->website['ourWorks'] = HowItWork::get();
        }
        if ($id ==2){
            $this->website['documents'] = DocumentRequired::get();
        }


        $this->website['service'] = Service::findOrFail($id);
        return view("website.service_detail", $this->website);
    }

    public function testPreparation($id,$slug)
    {
        $this->website['test'] = TestPreparation::with('exams','books','faqs')->find($id);
        return view("website.test_preparation", $this->website);
    }

    public function studyAbroad()
    {
        return view("website.study_abroad", $this->website);
    }
}
