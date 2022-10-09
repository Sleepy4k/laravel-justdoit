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
     * @var companyInterface
     */
    private $companyInterface;

    /**
     * Account service constructor.
     * 
     * @param App\Contracts\Models\UserInterface $userInterface
     * @param App\Contracts\Models\CompanyInterface $companyInterface
     */
    public function __construct(Models\UserInterface $userInterface, Models\CompanyInterface $companyInterface)
    {
        $this->userInterface = $userInterface;
        $this->companyInterface = $companyInterface;
    }

    /**
     * Index function.
     * 
     * @param $request
     */
    public function index($request)
    {
        try {
            $company = $this->companyInterface->create([
                'name' => $request['company'],
                'email' => $request['email']
            ]);
        } catch (\Throwable $th) {
            return $this->createResponse(500, 'Server Error',
                [
                    'error' => 'Data company is duplicated'
                ],
                [
                    route('api.register')
                ]
            );
        }

        try {
            $this->userInterface->create([
                'username' => $request['username'],
                'email' => $request['email'],
                'company' => $company->id,
                'whatsapp_number' => $request['whatsapp_number'],
                'password' => $request['password'],
            ]);
        } catch (\Throwable $th) {
            return $this->createResponse(500, 'Server Error',
                [
                    'error' => 'Data user is duplicated'
                ],
                [
                    route('api.register')
                ]
            );
        }

        try {
            activity("register")->withProperties([
                "username" => $request['username'],
                "email" => $request['email'],
                "whatsapp" => $request['whatsapp_number'],
                "company name" => $request['company']
            ])->log('Akun '.$request['username'].' berhasil di daftarkan');
        } catch (\Throwable $th) {
            return $this->createResponse(500, 'Server Error',
                [
                    'error' => 'Data user is duplicated'
                ],
                [
                    route('api.register')
                ]
            );
        }

        return $this->createResponse(200, 'success',
            [
                'data' => new RegisterResource($request)
            ],
            [
                route('api.register')
            ]
        );
    }
}