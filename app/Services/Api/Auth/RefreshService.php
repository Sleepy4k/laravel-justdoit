<?php

namespace App\Services\Api\Auth;

use App\Traits\ApiRespons;
use App\Http\Resources\Auth\LoginResource;

class RefreshService
{
    use ApiRespons;

    /**
     * Index function.
     */
    public function index()
    {
        try {
            $api = auth('api');

            return $this->createResponse(200, 'Token berhasil di refresh',
                [
                    'data' => new LoginResource($api->user()),
                    'token' => $api->refresh(),
                    'token_type' => 'bearer',
                    'expires_in' => $api->factory()->getTTL() * 60
                ],
                [
                    route('api.refresh')
                ]
            );
        } catch (\Throwable $th) {
            return $this->createResponse(500, 'Server Error',
                [
                    'error' => $th->getMessage()
                ],
                [
                    route('api.refresh')
                ]
            );
        }
    }
}