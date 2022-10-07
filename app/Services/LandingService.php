<?php

namespace App\Services;

use App\Traits\ApiRespons;

class LandingService
{
    use ApiRespons;

    /**
     * Web Index Landing
     */
    public function web()
    {
        return view('guest.landing.main');
    }

    /**
     * Api Index Landing
     */
    public function api()
    {
        return $this->createResponse(200, "Web service berjalan", [], [
            route('api.landing')
        ]);
    }
}