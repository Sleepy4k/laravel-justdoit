<?php

namespace App\Services\Page\Auth;

use Illuminate\Http\Request;

class LogoutService
{
    /**
     * Index function.
     * 
     * @param Illuminate\Http\Request $request
     */
    public function index(Request $request)
    {
        activity("logout")->withProperties(request()->user())->log(request()->user()->username." berhasil logout");

        auth()->logout();
         
        $session = $request->session();
        $session->invalidate();
        $session->regenerateToken();

        return $session;
    }
}