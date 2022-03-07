<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UniversityRequest;
use App\Models\StudyAbroad;
use App\Services\UniversityService;
use Illuminate\Http\Request;

class UniversityController extends CommonController
{
    /**
     * @var UniversityService
     */
    private $universityService;

    public function __construct(UniversityService $universityService)
    {
        parent::__construct();
        $this->universityService = $universityService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->website['universities'] = $this->universityService->query()->latest()->paginate($this->paginationLimit);
        return view('admin.university.index',$this->website);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->website['countries'] = StudyAbroad::select('id','country_name')->get();
        return view('admin.university.create',$this->website);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UniversityRequest $request)
    {
        $data = $request->validated();
        $university = $this->universityService->store($data);
        return  redirect(route('university.index'))->with('success','University Created Successfully');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->website['university'] = $this->universityService->findOrFail($id);
        return view('admin.university.edit',$this->website);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UniversityRequest $request, $id)
    {
        $data = $request->validated();
        $university = $this->universityService->update($id, $data);
        return back()->with('success','University Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $university = $this->universityService->delete($id);
        return response('success');
    }
}
