<?php

namespace App\Http\Controllers;

use App\Services\Page\WelcomeService;
use App\Http\Requests\WelcomeRequest;

class WelcomeController extends Controller
{
    /**
     * Locate landing blade file
     *
     * @return string
     */
    private static $landingPath = 'pages.landing.main';
    
    /**
     * Locate public landing blade file
     *
     * @return string
     */
    private static $landingFormPath = 'pages.landing.public';
    
    /**
     * Locate public landing blade file
     *
     * @return string
     */
    private static $landingChartPath = 'pages.landing.dashboard';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(WelcomeService $service)
    {
        if ($service->index(static::$landingPath)) {
            return view(static::$landingPath);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WelcomeService $service, $data)
    {
        $service->update($data);

        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(WelcomeService $service, $id)
    {
        return view(static::$landingFormPath, $service->show(static::$landingFormPath, $id));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function import(WelcomeRequest $request, WelcomeService $service, $category)
    {
        if ($request->validated()) {
            $service->import($request->validated(), $category);
    
            return back();
        } else {
            return back();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export(WelcomeService $service, $category)
    {
        return $service->export($category);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(WelcomeService $service, $id)
    {
        return view(static::$landingChartPath, $service->dashboard(static::$landingChartPath, $id));
    }
}