<?php

namespace App\Http\Controllers\Page\Admin;

use App\Http\Controllers\Controller;
use App\DataTables\Admin\RoleDataTable;
use App\Services\Page\Admin\RoleService;
use App\Http\Requests\Page\Admin\RoleRequest;

class RoleController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.admin.role';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RoleService $service, RoleDataTable $dataTable)
    {
        return $dataTable->render(static::$path, $service->index(static::$path));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request, RoleService $service)
    {
        if ($request->validated()) {
            $service->store($request->validated());
    
            return redirect(route('role.index'));
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
    public function edit(RoleService $service, $id)
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
    public function update(RoleRequest $request, RoleService $service, $id)
    {
        if ($request->validated()) {
            $service->update($request->validated(), $id);
            
            return redirect(route('role.index'));
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
    public function destroy(RoleService $service, $id)
    {
        $service->destroy($id);

        return redirect(route('role.index'));
    }
}