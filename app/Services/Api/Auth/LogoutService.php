<?php

namespace App\Services\Api\Auth;

use App\Traits\ApiRespons;
use App\Http\Resources\Auth\LogoutResource;

class LogoutService
{
    use ApiRespons;

    /**
     * Index function.
     */
    public function index()
    {
        try {
            $user = auth('api')->user();
            auth('api')->logout();

            return $this->createResponse(200, $user->username.' berhasil logout',
                [
                    'data' => new LogoutResource($user)
                ],
                [
                    route('api.logout')
                ]
            );
        } catch (\Throwable $th) {
            return $this->createResponse(500, 'Server Error',
                [
                    'error' => $th->getMessage()
                ],
                [
                    route('api.logout')
                ]
            );
        }
    }
}