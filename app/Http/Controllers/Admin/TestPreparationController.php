<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TestPreparationRequest;
use App\Services\PreparationBookService;
use App\Services\TestExamService;
use App\Services\TestPreparationFaqService;
use App\Services\TestPreparationService;
use Illuminate\Http\Request;

class TestPreparationController extends CommonController
{
    /**
     * @var TestPreparationService
     */
    private $testPreparationService;

    /**
     * @var TestExamService
     */
    private $testExamService;

    /**
     * @var PreparationBookService
     */
    private $preparationBookService;

    /**
     * @var TestPreparationFaqService
     */
    private $testPreparationFaqService;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(TestPreparationService $testPreparationService , TestExamService $testExamService , PreparationBookService $preparationBookService ,TestPreparationFaqService $testPreparationFaqService)
    {
        parent::__construct();
        $this->testPreparationService = $testPreparationService;
        $this->testExamService        = $testExamService;
        $this->preparationBookService = $preparationBookService;
        $this->testPreparationFaqService = $testPreparationFaqService;
    }

    public function index()
    {
        $this->website['testPreparations'] = $this->testPreparationService->query()->latest()->paginate($this->paginationLimit);
        return view('admin.testPreparation.index',$this->website);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testPreparation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestPreparationRequest $request)
    {
        $data = $request->validated();
        $test_preparation = $this->testPreparationService->store($data);

        $exam_title = $request->exam_title;
        $exam_detail = $request->exam_detail;

        //save exam
        if ($request->exam_title && count($request->exam_title)>1)
        {
            foreach ($exam_title as $key => $datum) {
                if ($key != 0)
                {
                    $examDetail['test_preparation_id'] = $test_preparation->id;
                    $examDetail['exam_title'] = $exam_title[$key];
                    $examDetail['exam_detail'] = $exam_detail[$key];
                    $this->testExamService->store($examDetail);
                }
            }
        }

        //save book

        $book_title = $request->book_title;
        $book_description = $request->book_description;
        if ($request->book_title && count($request->book_title)>1)
        {
            foreach ($book_title as $key => $datum) {
                if ($key != 0)
                {
                    $bookDetail['test_preparation_id'] = $test_preparation->id;
                    $bookDetail['book_title'] = $datum;
                    $bookDetail['book_description'] = $book_description[$key];
                    $this->preparationBookService->store($bookDetail);
                }
            }
        }

        //save faq

        $question  = $request->question;
        $answer  = $request->answer;

        if ($question && count($question)>0)
        {
            foreach ($question as $key => $datum) {
                if ($datum != null)
                {
                    $faq['test_preparation_id'] = 1;
                    $faq['question'] = $question[$key];
                    $faq['answer'] = $answer[$key];
                    $this->testPreparationFaqService->store($faq);
                }
            }
        }


        return redirect(route('test-preparation.index'))->with('success','Test Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
