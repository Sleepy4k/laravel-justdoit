<?php

namespace App\Http\Controllers\Fallback;

use App\Http\Controllers\Controller;
use App\Services\Fallback\WebService;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(WebService $service)
    {
        return $service->index();
    }
}
