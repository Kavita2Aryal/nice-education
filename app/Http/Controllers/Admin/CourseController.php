<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CourseRequest;
use App\Services\CourseService;
use Illuminate\Http\Request;

class CourseController extends CommonController
{
    /**
     * @var CourseService
     */
    private $courseService;

    public function __construct(CourseService $courseService)
    {
        parent::__construct();
        $this->courseService = $courseService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->website['courses'] = $this->courseService->query()->latest()->get();
        return view('admin.courses',$this->website);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $data = $request->validated();
        $course = $this->courseService->store($data);
        return  redirect(route('course.index'))->with('success','Course Created Successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request, $id)
    {
        $data = $request->validated();
        $course = $this->courseService->update($id, $data);
        return back()->with('success','Course Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->courseService->delete($id);
        return response('success');
    }
}
