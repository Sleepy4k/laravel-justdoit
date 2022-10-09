<?php

namespace App\Http\Controllers\Api\Error;

use App\Http\Controllers\Controller;
use App\Services\Api\Error\FallbackService;

class FallbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FallbackService $service)
    {
        return $service->index();
    }
}