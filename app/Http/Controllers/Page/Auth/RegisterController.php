<?php

namespace App\Http\Controllers\Page\Auth;

use App\Http\Controllers\Controller;
use App\Services\Page\Auth\RegisterService;
use App\Http\Requests\Page\Auth\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.auth.register';

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RegisterService $service)
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
    public function store(RegisterRequest $request, RegisterService $service)
    {
        if ($request->validated()) {
            $service->store($request->validated());

            return redirect(route('login.index'));
        } else {
            return back();
        }
    }
}