<?php

namespace App\Http\Controllers\Page\Main;

use App\Http\Controllers\Controller;
use App\Services\Page\Main\DashboardService;

class DashboardController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.main.dashboard';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DashboardService $service)
    {
        return view(static::$path, $service->index(static::$path));
    }
}