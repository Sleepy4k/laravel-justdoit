<?php

namespace App\Services\Api\Error;

use App\Traits\ApiRespons;

class FallbackService
{
    use ApiRespons;

    /**
     * Index function.
     */
    public function index()
    {
        return $this->createResponse(404, trans('api.fallback.message'),
            [
                'error' => trans('api.fallback.error')
            ],
            [
                route('landing')
            ]
        );
    }
}