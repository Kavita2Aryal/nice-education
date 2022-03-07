<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DocumentRequiredRequest;
use App\Services\DocumentRequiredService;
use Illuminate\Http\Request;

class DocumentRequiredController extends CommonController
{
    /**
     * @var DocumentRequiredService
     */
    private $documentRequiredService;

    public function __construct(DocumentRequiredService $documentRequiredService)
    {
        parent::__construct();
        $this->documentRequiredService = $documentRequiredService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->website['documents'] = $this->documentRequiredService->query()->latest()->get();
        return view('admin.document_required',$this->website);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentRequiredRequest $request)
    {
        $data = $request->validated();
        $document = $this->documentRequiredService->store($data);
        return  redirect(route('document-required.index'))->with('success','Data Created Successfully');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentRequiredRequest $request, $id)
    {
        $data = $request->validated();
        $document = $this->documentRequiredService->update($id, $data);

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
        $data = $this->documentRequiredService->delete($id);
        return response('success');
    }
}
