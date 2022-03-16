<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsCategoryRequest;
use App\Services\NewsCategoryService;
use Illuminate\Http\Request;

class NewsCategoryController extends CommonController
{
    /**
     * @var NewsCategoryService
     */
    private $newsCategoryService;

    public function __construct(NewsCategoryService $newsCategoryService)
    {
        parent::__construct();
        $this->newsCategoryService = $newsCategoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->website['news_categories'] = $this->newsCategoryService->query()->latest()->paginate($this->paginationLimit);
        return view('admin.news.news_categories',$this->website);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create_category',$this->website);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsCategoryRequest $request)
    {
        $data = $request->validated();

        $category = $this->newsCategoryService->store($data);
        return  redirect(route('news-category.index'))->with('success','Category Created Successfully');
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
        $this->website['news_category'] = $this->newsCategoryService->findOrFail($id);
        return view('admin.news.edit_category',$this->website);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsCategoryRequest $request, $id)
    {
        $data = $request->validated();

        $news_category = $this->newsCategoryService->update($id, $data);

        return back()->with('success','Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = $this->newsCategoryService->delete($id);

        return response('success');
    }
}
