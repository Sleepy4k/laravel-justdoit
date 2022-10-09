<?php

namespace App\Services\Page\Admin;

use App\Contracts\Models;
use App\Traits\ViewChecker;
 
class RoleService
{
    use ViewChecker;

    /**
     * @var roleInterface
     */
    private $roleInterface;

    /**
     * @var permissionInterface
     */
    private $permissionInterface;

    /**
     * Account service constructor.
     * 
     * @param App\Contracts\Models\RoleInterface $roleInterface
     * @param App\Contracts\Models\PermissionInterface $permissionInterface
     */
    public function __construct(Models\RoleInterface $roleInterface, Models\PermissionInterface $permissionInterface)
    {
        $this->roleInterface = $roleInterface;
        $this->permissionInterface = $permissionInterface;
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
                'roles' => config('enum.role.guard'),
                'permissions' => $this->permissionInterface->all()
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
        $this->roleInterface->create($request);

        return toastr()->success('Role berhasil di buat', 'Role');
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
                'role' => $this->roleInterface->findById($id, ['*'], ['permissions']),
                'roles' => config('enum.role.guard')
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
        $this->roleInterface->update($id, $request);

        return toastr()->success('Role berhasil di ubah', 'Role');
    }

    /**
     * Destroy function.
     * 
     * @param $id
     */
    public function destroy($id)
    {
        $this->roleInterface->deleteById($id);
        
        return toastr()->success('Role berhasil di hapus', 'Role');
    }
}