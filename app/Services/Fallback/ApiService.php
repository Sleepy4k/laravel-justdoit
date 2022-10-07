<?php

namespace App\Services\Fallback;

use App\Traits\ApiRespons;

class ApiService
{
    use ApiRespons;

    /**
     * Index function.
     */
    public function index()
    {
        return $this->createResponse(404, 'Resource API tidak ditemukan',
            [
                'error' => 'Harap menghubungi pengembang website'
            ],
            [
                route('api.landing')
            ]
        );
    }
}