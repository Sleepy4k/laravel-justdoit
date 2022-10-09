<?php

namespace App\Services\Page\System;

use App\Contracts\Models;
use App\Traits\ViewChecker;
 
class CategoryService
{
    use ViewChecker;

    /**
     * @var categoryInterface
     */
    private $categoryInterface;
    
    /**
     * Account service constructor.
     * 
     * @param App\Contracts\Models\CategoryInterface $categoryInterface
     */
    public function __construct(Models\CategoryInterface $categoryInterface)
    {
        $this->categoryInterface = $categoryInterface;
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
        $this->categoryInterface->create($request);

        return toastr()->success('Kategori berhasil dibuat', 'Kategori');
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
                'category' => $this->categoryInterface->findById($id)
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
        $this->categoryInterface->update($id, $request);

        return toastr()->success('Kategori berhasil diupdate', 'Kategori');
    }

    /**
     * Destroy function.
     * 
     * @param $id
     */
    public function destroy($id)
    {
        $this->categoryInterface->deleteById($id);

        return toastr()->success('Kategori berhasil di hapus', 'Kategori');
    }
}