<?php

namespace App\Services\Page\System;

use App\Contracts\Models;
use App\Traits\ViewChecker;

class ApplicationService
{
    use ViewChecker;

    /**
     * @var applicationInterface
     */
    private $applicationInterface;
    
    /**
     * Account service constructor.
     * 
     * @param App\Contracts\Models\ApplicationInterface $applicationInterface
     */
    public function __construct(Models\ApplicationInterface $applicationInterface)
    {
        $this->applicationInterface = $applicationInterface;
    }

    /**
     * Index function.
     * 
     * @param $path
     */
    public function index($path)
    {
        if ($this->checkView($path)) {
            return [
                'application' => $this->applicationInterface->findById(1)
            ];
        }
    }

    /**
     * Update function.
     * 
     * @param $request
     * @param $id
     */
    public function update($request, $id)
    {
        $this->applicationInterface->update($id, $request);

        return toastr()->success('Aplikasi berhasil di update', 'Application');
    }
}