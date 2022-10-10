<?php

namespace App\Services\Page\Auth;

use App\Contracts\Models;
use App\Traits\ViewChecker;

class RegisterService
{
    use ViewChecker;

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
        $this->userInterface->create([
            'username' => $request['username'],
            'surename' => $request['surename'],
            'language' => 'en',
            'password' => $request['password']
        ]);

        activity("register")->withProperties([
            'username' => $request['username'],
            'surename' => $request['surename'],
            'language' => 'en'
        ])->log('Akun '.$request['username'].' berhasil di daftarkan');

        return toastr()->success($request['username'].' berhasil di daftarkan', 'Auth');
    }
}