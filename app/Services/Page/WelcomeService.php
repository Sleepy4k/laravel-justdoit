<?php

namespace App\Services\Page;

use App\Traits\ViewChecker;

class WelcomeService
{
    use ViewChecker;

    public function index($path)
    {
        return $this->checkView($path);
    }
}