<?php

namespace App\Services\Page\Admin;

use App\Contracts\Models;
use App\Traits\ViewChecker;
 
class AccountService
{
    use ViewChecker;

    /**
     * @var userInterface
     */
    private $userInterface;
    
    /**
     * @var roleInterface
     */
    private $roleInterface;

    /**
     * @var categoryInterface
     */
    private $categoryInterface;

    /**
     * Account service constructor.
     * 
     * @param App\Contracts\Models\UserInterface $userInterface
     * @param App\Contracts\Models\RoleInterface $roleInterface
     * @param App\Contracts\Models\CategoryInterface $categoryInterface
     */
    public function __construct(Models\UserInterface $userInterface, Models\RoleInterface $roleInterface, Models\CategoryInterface $categoryInterface)
    {
        $this->userInterface = $userInterface;
        $this->roleInterface = $roleInterface;
        $this->categoryInterface = $categoryInterface;
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
                'roles' => $this->roleInterface->all()
            ];
        }
    }

    /**
     * Store function.
     * 
     * @param $request
     */
    public function store($request)
    {
        $this->userInterface->create($request);

        return toastr()->success('Akun berhasil dibuat', 'Akun');
    }

    /**
     * Edit function.
     * 
     * @param $path
     * @param $id
     */
    public function edit($path, $id)
    {
        if ($this->checkView($path)) {
            return [
                'roles' => $this->roleInterface->all(),
                'user' => $this->userInterface->findById($id),
                'categories' => $this->categoryInterface->all()
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
        $this->userInterface->update($id, $request);

        return toastr()->success('Akun berhasil diupdate', 'Akun');
    }

    /**
     * Destroy function.
     * 
     * @param $id
     */
    public function destroy($id)
    {
        $this->userInterface->deleteById($id);

        return toastr()->success('Akun berhasil di hapus', 'Akun');
    }
}