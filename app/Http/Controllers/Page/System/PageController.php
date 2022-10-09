<?php

namespace App\Http\Controllers\Page\System;

use App\Http\Controllers\Controller;
use App\DataTables\System\PageDataTable;
use App\Services\Page\System\PageService;
use App\Http\Requests\Page\System\PageRequest;

class PageController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.system.page';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PageService $service, PageDataTable $dataTable)
    {
        return $dataTable->render(static::$path, $service->index(static::$path));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request, PageService $service)
    {
        if ($request->validated()) {
            $service->store($request->validated());
    
            return redirect(route('page.index'));
        } else {
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PageService $service, $id)
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
    public function update(PageRequest $request, PageService $service, $id)
    {
        if ($request->validated()) {
            $service->update($request->validated(), $id);
    
            return redirect(route('page.index'));
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
    public function destroy(PageService $service, $id)
    {
        $service->destroy($id);

        return redirect(route('page.index'));
    }
}