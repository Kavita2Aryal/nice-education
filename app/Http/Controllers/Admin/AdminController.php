<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CompanyRequest;
use App\Models\Admin;
use App\Models\HowItWork;
use App\Services\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends CommonController
{
    /**
     * @var CompanyService
     */
    private $companyService;

    public function __construct(CompanyService $companyService)
    {
        parent::__construct();
        $this->companyService = $companyService;
    }


    public function manageWebsite()
    {

        return view('admin.manage_website',$this->website);
    }

    public function updateWebsite(CompanyRequest $request)
    {
        $data = $request->validated();
        $company = $this->companyService->update(1, $data);
        return back()->with('success','Website Updated Successfully');
    }

    public function manageHomepageBanner()
    {
        return view('admin.update_homepage_banner',$this->website);
    }

    public function updateHomepageBanner(CompanyRequest $request)
    {
        $data = $request->validated();
        $banner = $this->companyService->update(1, $data);
        return back()->with('success','Homepage Banner Updated Successfully');
    }

    public function howItWork()
    {
        $this->website['works'] = HowItWork::get();
        return view('admin.update_how_it_work',$this->website);
    }

    public function updateHowItWork(Request $request)
    {
        return $request->all();
    }

    public function manageVisaAcceptanceContent()
    {
        return view('admin.update_visa_acceptance_content',$this->website);
    }

    public function updateVisaAcceptanceContent(CompanyRequest $request)
    {
        $data = $request->validated();
        $banner = $this->companyService->update(1, $data);
        return back()->with('success','Data Updated Successfully');
    }

    public function profile()
    {
        $this->website['admin'] = Admin::first();
        return view('admin.update_profile',$this->website);
    }

    public function updateProfile(Request $request)
    {
        $admin = Admin::first();

        if($request->hasFile('image')){
            $file=$request->file('image');
            $name =time().$file->getClientOriginalName();
            $file = str_replace(' ', '_', $file);

//            $file->move(public_path().'/backend/images/',$name);
            $path = $request->file('image')->storeAs('public/images/admin/images/', $name);

        }

//        if ($request->hasFile('image')) {
//            // Get filename with the extension
//            $filenameWithExt = $request->file('featured_image')->getClientOriginalName();
//            // Get just filename
//            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
//            // Replace space by underscore
//            $filename = str_replace(' ', '_', $filename);
//            // Get just ext
//            $extension = $request->file('featured_image')->getClientOriginalExtension();
//            // Filename to store
//            $filenameToStoreImg = $filename . '_' . time() . '.' . $extension;
//            // Upload featured_image
//            $path = $request->file('featured_image')->storeAs('public/news', $filenameToStoreImg);
//        } else {
//            $fileName = 'placeholder.jpg';
//        }


        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $name
        ]);



        return back()->with('success','Profile Updated Successfully');
    }

    public function password()
    {
        return view('admin.update_password',$this->website);
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required',
        ]);

        $opass =$request->get('old_password');
        $dbpass = Auth::guard('admin')->user()->password;
        if(!Hash::check($opass ,$dbpass)){
            return redirect()->back()->with('error_message','Old Password is wrong');
        }

        $new_password =$request->get('new_password');

        $user = Auth::guard('admin')->user();
        $user->password=bcrypt($new_password);

        if($user->save()){
            return back()->with('success','Password Updated Successfully');
        }
    }
}
