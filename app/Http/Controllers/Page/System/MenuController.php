<?php

namespace App\Http\Controllers\Page\System;

use App\Http\Controllers\Controller;
use App\DataTables\System\MenuDataTable;
use App\Services\Page\System\MenuService;
use App\Http\Requests\Page\System\MenuRequest;

class MenuController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.system.menu';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MenuService $service, MenuDataTable $dataTable)
    {
        return $dataTable->render(static::$path, $service->index(static::$path));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request, MenuService $service)
    {
        if ($request->validated()) {
            $service->store($request->validated());
    
            return redirect(route('menu.index'));
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
    public function edit(MenuService $service, $id)
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
    public function update(MenuRequest $request, MenuService $service, $id)
    {
        if ($request->validated()) {
            $service->update($request->validated(), $id);
    
            return redirect(route('menu.index'));
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
    public function destroy(MenuService $service, $id)
    {
        $service->destroy($id);

        return redirect(route('menu.index'));
    }
}