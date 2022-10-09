<?php

namespace App\Http\Controllers\Page\Auth;

use App\Http\Controllers\Controller;
use App\Services\Page\Auth\LoginService;
use App\Http\Requests\Page\Auth\LoginRequest;

class LoginController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.auth.login';

    /**
     * Show the form for login.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LoginService $service)
    {
        $service->index(static::$path);

        return view(static::$path);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request, LoginService $service)
    {
        if ($request->validated()) {
            if ($service->store($request->validated())) {
                return redirect(route('statistic.index'));
            } else {
                return back();
            }
        } else {
            return back();
        }
    }
}