<?php

namespace App\Http\Controllers\Fallback;

use App\Http\Controllers\Controller;
use App\Services\Fallback\ApiService;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ApiService $service)
    {
        return $service->index();
    }
}
