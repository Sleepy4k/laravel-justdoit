<?php

namespace App\Http\Controllers\Page\System;

use App\Http\Controllers\Controller;
use App\DataTables\System\CategoryDataTable;
use App\Services\Page\System\CategoryService;
use App\Http\Requests\Page\System\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.system.category';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryService $service, CategoryDataTable $dataTable)
    {
        if ($service->index(static::$path)) {
            return $dataTable->render(static::$path);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request, CategoryService $service)
    {
        if ($request->validated()) {
            $service->store($request->validated());
    
            return redirect(route('category.index'));
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
    public function edit(CategoryService $service, $id)
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
    public function update(CategoryRequest $request, CategoryService $service, $id)
    {
        if ($request->validated()) {
            $service->update($request->validated(), $id);
            
            return redirect(route('category.index'));
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
    public function destroy(CategoryService $service, $id)
    {
        $service->destroy($id);

        return redirect(route('category.index'));
    }
}