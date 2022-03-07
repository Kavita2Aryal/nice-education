<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StudyAbroadRequest;
use App\Services\StudyAbroadService;
use App\Services\TestPreparationFaqService;
use Illuminate\Http\Request;

class StudyAbroadController extends CommonController
{
    /**
     * @var StudyAbroadService
     */
    private $studyAbroadService;

    /**
     * @var TestPreparationFaqService
     */
    private $testPreparationFaqService;

    public function __construct(StudyAbroadService $studyAbroadService , TestPreparationFaqService $testPreparationFaqService)
    {
        parent::__construct();
        $this->studyAbroadService = $studyAbroadService;
        $this->testPreparationFaqService = $testPreparationFaqService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->website['countries'] = $this->studyAbroadService->query()->latest()->paginate($this->paginationLimit);
        return view('admin.studyAbroad.index',$this->website);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.studyAbroad.create',$this->website);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudyAbroadRequest $request)
    {
        $data = $request->validated();
        $study = $this->studyAbroadService->store($data);

        //save faq

        $question  = $request->question;
        $answer  = $request->answer;

        if ($question && count($question)>0)
        {
            foreach ($question as $key => $datum) {
                if ($datum != null)
                {
                    $faq['type'] = "study";
                    $faq['type_id'] = $study->id;
                    $faq['question'] = $question[$key];
                    $faq['answer'] = $answer[$key];
                    $this->testPreparationFaqService->store($faq);
                }
            }
        }

        return  redirect(route('study-abroad.index'))->with('success','Study abroad created successfully');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->website['study'] = $this->studyAbroadService->findOrFail($id);
        return view('admin.studyAbroad.edit',$this->website);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudyAbroadRequest $request, $id)
    {
        $data = $request->validated();
        $study = $this->studyAbroadService->update($id, $data);

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
        $study = $this->studyAbroadService->delete($id);

        return response('success');
    }
}
