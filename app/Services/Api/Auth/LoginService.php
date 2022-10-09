<?php

namespace App\Services\Api\Auth;

use App\Traits\ApiRespons;
use App\Http\Resources\Auth\LoginResource;

class LoginService
{
    use ApiRespons;

    /**
     * Index function.
     * 
     * @param $request
     */
    public function index($request)
    {
        $token = auth('api')->attempt($request);

        if (!$token) {
            return $this->createResponse(401, 'Account Invalid',
                [
                    'error' => 'Nomor whatsapp atau kata sandi salah'
                ],
                [
                    route('api.login')
                ]
            );
        }

        try {
            $api = auth('api');

            return $this->createResponse(200, trans('auth.succesfully', ['name' => $api->user()->username, 'condition' => 'login']),
                [
                    'data' => new LoginResource($api->user()),
                    'token' => $token,
                    'token_type' => 'bearer',
                    'expires_in' => $api->factory()->getTTL() * 60
                ],
                [
                    route('api.login')
                ]
            );
        } catch (\Throwable $th) {
            return $this->createResponse(500, 'Server Error',
                [
                    'error' => $th->getMessage()
                ],
                [
                    route('api.login')
                ]
            );
        }
    }
}