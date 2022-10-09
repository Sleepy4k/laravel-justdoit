<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Services\Api\Auth\RegisterService;
use App\Http\Requests\Api\Auth\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RegisterRequest $request, RegisterService $service)
    {
        return $service->index($request->validated());
    }
}