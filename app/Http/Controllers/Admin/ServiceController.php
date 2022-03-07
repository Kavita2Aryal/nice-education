<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use App\Services\EducationServicesService;
use Illuminate\Http\Request;

class ServiceController extends CommonController
{
    /**
     * @var EducationServicesService
     */
    private $educationServicesService;

    public function __construct(EducationServicesService $educationServicesService)
    {
        parent::__construct();
        $this->educationServicesService = $educationServicesService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->website['services'] = $this->educationServicesService->query()->latest()->paginate($this->paginationLimit);
        return view('admin.service.index',$this->website);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create',$this->website);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $data = $request->validated();
        $service = $this->educationServicesService->store($data);
        return  redirect(route('service.index'))->with('success','Service Created Successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->website['service'] = $this->educationServicesService->findOrFail($id);
        return view('admin.service.edit',$this->website);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $data = $request->validated();

        if ($request->status)
        {
            $data['status'] = $request->status;
        }else{
            $data['status'] = false;
        }

        $service = $this->educationServicesService->update($id, $data);

        return back()->with('success','Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = $this->educationServicesService->delete($id);

        return response('success');
    }
}
