<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Services\Api\Auth\LoginService;
use App\Http\Requests\Api\Auth\LoginRequest;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(LoginService $service, LoginRequest $request)
    {
        if ($request->validated()) {
            return $service->index($request->validated());
        } else {
            return back();
        }
    }
}
