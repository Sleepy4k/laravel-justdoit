<?php

namespace App\Http\Controllers\Page\System;

use App\Http\Controllers\Controller;
use App\Services\Page\System\ApplicationService;
use App\Http\Requests\Page\System\ApplicationRequest;

class ApplicationController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.system.application';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ApplicationService $service)
    {
        return view(static::$path, $service->index(static::$path));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ApplicationRequest $request, ApplicationService $service, $id)
    {
        if ($request->validated()) {
            $service->update($request->validated(), $id);
    
            return redirect(route('application.index'));
        } else {
            return back();
        }
    }
}