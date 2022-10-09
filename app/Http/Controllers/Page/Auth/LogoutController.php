<?php

namespace App\Http\Controllers\Page\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Page\Auth\LogoutService;

class LogoutController extends Controller
{
    /**
     * Remove the authenticate user.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, LogoutService $service)
    {
        $service->index($request);

        return redirect(route("landing"));
    }
}