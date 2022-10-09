<?php

namespace App\Services\Page\Auth;

use App\Traits\ViewChecker;

class LoginService
{
    use ViewChecker;

    /**
     * Index function.
     * 
     * @param $path
     */
    public function index($path)
    {
        return $this->checkView($path);
    }

    /**
     * Store function.
     * 
     * @param $request
     */
    public function store($request)
    {
        if (auth()->attempt($request)) {
            toastr()->success('Login berhasil', 'Auth');

            request()->session()->regenerate();

            activity("login")->withProperties(request()->user())->log(request()->user()->username." berhasil login");

            session()->put("lang_code", request()->user()->language);

            return true;
        } else {
            toastr()->error('Akun tidak ditemukan', 'Auth');
            
            return false;
        }
    }
}