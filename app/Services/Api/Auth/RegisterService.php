<?php

namespace App\Services\Api\Auth;

use App\Contracts\Models;
use App\Traits\ApiRespons;
use App\Http\Resources\Auth\RegisterResource;

class RegisterService
{
    use ApiRespons;

    /**
     * @var userInterface
     */
    private $userInterface;

    /**
     * Account service constructor.
     * 
     * @param App\Contracts\Models\UserInterface $userInterface
     */
    public function __construct(Models\UserInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }

    /**
     * Index function.
     * 
     * @param $request
     */
    public function index($request)
    {
        try {
            $user = $this->userInterface->create([
                'username' => $request['username'],
                'surename' => $request['surename'],
                'language' => 'en',
                'password' => $request['password']
            ]);
        } catch (\Throwable $th) {
            return $this->createResponse(500, 'Server Error',
                [
                    'error' => $th->getMessage()
                ],
                [
                    route('api.register')
                ]
            );
        }

        try {
            activity("register")->withProperties([
                'username' => $request['username'],
                'surename' => $request['surename'],
                'language' => 'en'
            ])->log('Akun '.$request['username'].' berhasil di daftarkan');
        } catch (\Throwable $th) {
            return $this->createResponse(500, 'Server Error',
                [
                    'error' => $th->getMessage()
                ],
                [
                    route('api.register')
                ]
            );
        }

        return $this->createResponse(200, 'success',
            [
                'data' => new RegisterResource($user)
            ],
            [
                route('api.register')
            ]
        );
    }
}