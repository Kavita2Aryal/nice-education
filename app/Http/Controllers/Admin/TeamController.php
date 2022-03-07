<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamRequest;
use App\Services\TeamService;
use Illuminate\Http\Request;

class TeamController extends CommonController
{
    /**
     * @var TeamService
     */
    private $teamService;

    public function __construct(TeamService $teamService)
    {
        parent::__construct();
        $this->teamService = $teamService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->website['teams'] = $this->teamService->query()->latest()->paginate($this->paginationLimit);
        return view('admin.team.index',$this->website);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->website['edit'] = false;
        return view('admin.team.create',$this->website);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        $data = $request->validated();
        $team = $this->teamService->store($data);
        return  redirect(route('team.index'))->with('success','Team Created Successfully');
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
        $this->website['team'] = $this->teamService->findOrFail($id);
        $this->website['edit'] = false;
        return view('admin.team.edit',$this->website);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, $id)
    {
        $data = $request->validated();
        $team = $this->teamService->update($id, $data);

        return back()->with('success','Team Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = $this->teamService->delete($id);

        return response('success');
    }
}
