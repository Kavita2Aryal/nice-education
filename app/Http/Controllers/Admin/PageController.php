<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageRequest;
use App\Models\Page;
use App\Services\PageService;
use Illuminate\Http\Request;

class PageController extends CommonController
{
    /**
     * @var PageService
     */
    private $pageService;

    public function __construct(PageService $pageService)
    {
        parent::__construct();
        $this->pageService = $pageService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->website['pages'] = $this->pageService->query()->latest()->paginate($this->paginationLimit);
        return view('admin.page.index',$this->website);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create',$this->website);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        $data = $request->validated();
        if ($request->status)
        {
            $data['status'] = $request->status;
        }
        $page = $this->pageService->store($data);
        return  redirect(route('page.index'))->with('success','Page Created Successfully');
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
        $this->website['page'] = $this->pageService->findOrFail($id);
        return view('admin.page.edit',$this->website);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {
        $data = $request->validated();

        if ($request->status)
        {
            $data['status'] = $request->status;
        }else{
            $data['status'] = false;
        }

        $page = $this->pageService->update($id, $data);

        return back()->with('success','Page Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = $this->pageService->delete($id);

        return response('success');
    }
}
