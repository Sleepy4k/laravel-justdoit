<?php

namespace App\Services\Page\System;

use App\Contracts\Models;
use App\Traits\ViewChecker;
 
class MenuService
{
    use ViewChecker;

    /**
     * @var menuInterface
     */
    private $menuInterface;
    
    /**
     * @var categoryInterface
     */
    private $categoryInterface;
    
    /**
     * @var permissionInterface
     */
    private $permissionInterface;

    /**
     * Account service constructor.
     * 
     * @param App\Contracts\Models\MenuInterface $menuInterface
     * @param App\Contracts\Models\CategoryInterface $categoryInterface
     * @param App\Contracts\Models\PermissionInterface $permissionInterface
     */
    public function __construct(Models\MenuInterface $menuInterface, Models\CategoryInterface $categoryInterface, Models\PermissionInterface $permissionInterface)
    {
        $this->menuInterface = $menuInterface;
        $this->categoryInterface = $categoryInterface;
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
                'categories' => $this->categoryInterface->all(),
                'permissions' => $this->permissionInterface->all(),
                'types' => config('enum.menu.type')
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
        $this->menuInterface->create($request);

        return toastr()->success('Menu berhasil di buat', 'Menu');
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
                'menu' => $this->menuInterface->findById($id),
                'categories' => $this->categoryInterface->all(),
                'permissions' => $this->permissionInterface->all(),
                'types' => config('enum.menu.type')
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
        $this->menuInterface->update($id, $request);

        return toastr()->success('Menu berhasil di ubah', 'Menu');
    }

    /**
     * Destroy function.
     * 
     * @param $id
     */
    public function destroy($id)
    {
        $this->menuInterface->deleteById($id);
        
        return toastr()->success('Menu berhasil di hapus', 'Menu');
    }
}