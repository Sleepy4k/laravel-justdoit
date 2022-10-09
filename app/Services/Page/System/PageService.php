<?php

namespace App\Services\Page\System;

use App\Contracts\Models;
use App\Traits\ViewChecker;
 
class PageService
{
    use ViewChecker;

    /**
     * @var menuInterface
     */
    private $menuInterface;
    
    /**
     * @var pageInterface
     */
    private $pageInterface;
    
    /**
     * @var permissionInterface
     */
    private $permissionInterface;

    /**
     * Account service constructor.
     * 
     * @param App\Contracts\Models\MenuInterface $menuInterface
     * @param App\Contracts\Models\PageInterface $pageInterface
     * @param App\Contracts\Models\PermissionInterface $permissionInterface
     */
    public function __construct(Models\MenuInterface $menuInterface, Models\PageInterface $pageInterface, Models\PermissionInterface $permissionInterface)
    {
        $this->menuInterface = $menuInterface;
        $this->pageInterface = $pageInterface;
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
                'menus' => $this->menuInterface->all(),
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
        $this->pageInterface->create($request);

        return toastr()->success('Halaman berhasil di buat', 'Page');
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
                'menus' => $this->menuInterface->all(),
                'page' => $this->pageInterface->findById($id),
                'permissions' => $this->permissionInterface->all()
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
        $this->pageInterface->update($id, $request);

        return toastr()->success('Halaman berhasil di ubah', 'Page');
    }

    /**
     * Destroy function.
     * 
     * @param $id
     */
    public function destroy($id)
    {
        $this->pageInterface->deleteById($id);
        
        return toastr()->success('Halaman berhasil di hapus', 'Page');
    }
}