<?php

namespace App\Http\Controllers;

use App\Services\LandingService;

class LandingController extends Controller
{
    /**
     * Web Index Landing
     */
    public function web(LandingService $service)
    {
        return $service->web();
    }

    /**
     * Api Index Landing
     */
    public function api(LandingService $service)
    {
        return $service->api();
    }
}
