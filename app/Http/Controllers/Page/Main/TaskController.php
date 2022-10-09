<?php

namespace App\Http\Controllers\Page\Main;

use App\Http\Controllers\Controller;
use App\DataTables\Main\TaskDataTable;
use App\Services\Page\Main\TaskService;
use App\Http\Requests\Page\Main\TaskRequest;

class TaskController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.main.task';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TaskService $service, TaskDataTable $dataTable)
    {
        return $dataTable->render(static::$path, $service->index(static::$path));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request, TaskService $service)
    {
        if ($request->validated()) {
            $service->store($request->validated());
    
            return redirect(route('task.index'));
        } else {
            return back();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(TaskService $service, $id)
    {
        return view(static::$path, $service->show(static::$path, $id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskService $service, $id)
    {
        return view(static::$path, $service->edit(static::$path, $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, TaskService $service, $id)
    {
        if ($request->validated()) {
            $service->update($request->validated(), $id);
    
            return redirect(route('task.index'));
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskService $service, $id)
    {
        $service->destroy($id);

        return redirect(route('task.index'));
    }
}