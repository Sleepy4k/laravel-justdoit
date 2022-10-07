<?php

namespace App\Services\Fallback;

class WebService
{
    /**
     * Index function.
     */
    public function index()
    {
        return abort(404);
    }
}