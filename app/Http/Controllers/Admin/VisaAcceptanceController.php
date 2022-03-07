<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VisaAcceptanceRequest;
use App\Models\StudyAbroad;
use App\Services\VisaAcceptanceService;
use Illuminate\Http\Request;

class VisaAcceptanceController extends CommonController
{
    /**
     * @var VisaAcceptanceService
     */
    private $visaAcceptanceService;

    public function __construct(VisaAcceptanceService $visaAcceptanceService)
    {
        parent::__construct();
        $this->visaAcceptanceService = $visaAcceptanceService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->website['students'] = $this->visaAcceptanceService->query()->with('country')->latest()->paginate($this->paginationLimit);
//        return $this->website['students'];
        return view('admin.visa.index',$this->website);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->website['countries'] = StudyAbroad::select('id','country_name')->get();
        return view('admin.visa.create',$this->website);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VisaAcceptanceRequest $request)
    {
        $data = $request->validated();
        $students = $this->visaAcceptanceService->store($data);
        return  redirect(route('visa-acceptance.index'))->with('success','Data Created Successfully');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->website['student'] = $this->visaAcceptanceService->findOrFail($id);
        return view('admin.visa.edit',$this->website);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VisaAcceptanceRequest $request, $id)
    {
        $data = $request->validated();
        $student = $this->visaAcceptanceService->update($id, $data);
        return back()->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $university = $this->visaAcceptanceService->delete($id);
        return response('success');
    }
}
