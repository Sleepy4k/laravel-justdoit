<?php

namespace App\Http\Controllers\Api\Main;

use App\Traits\ApiRespons;
use App\Http\Controllers\Controller;
use App\Services\Api\Main\TaskService;
use App\Http\Requests\Api\Main\TaskRequest;

class TaskController extends Controller
{
    use ApiRespons;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TaskService $service)
    {
        return $service->index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request, TaskService $service)
    {
        return $service->store($request->validated());
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, TaskService $service)
    {
        return $service->update($request->validated());
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskRequest $request, TaskService $service)
    {
        return $service->destroy($request->validated());
    }
}