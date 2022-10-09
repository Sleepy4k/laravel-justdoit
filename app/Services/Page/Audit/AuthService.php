<?php

namespace App\Services\Page\Audit;

use App\Traits\ViewChecker;

class AuthService
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
}