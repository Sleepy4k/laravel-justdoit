<?php

namespace App\Http\Controllers\Page\System;

use App\Http\Controllers\Controller;
use App\DataTables\System\TranslateDataTable;
use App\Services\Page\System\TranslateService;
use App\Http\Requests\Page\System\TranslateRequest;

class TranslateController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.system.translate';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TranslateService $service, TranslateDataTable $dataTable)
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
    public function store(TranslateRequest $request, TranslateService $service)
    {
        if ($request->validated()) {
            $service->store($request->validated());
    
            return redirect(route('translate.index'));
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
    public function edit(TranslateService $service, $id)
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
    public function update(TranslateRequest $request, TranslateService $service, $id)
    {
        if ($request->validated()) {
            $service->update($request->validated(), $id);
    
            return redirect(route('translate.index'));
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
    public function destroy(TranslateService $service, $id)
    {
        $service->destroy($id);

        return redirect(route('translate.index'));
    }
}
