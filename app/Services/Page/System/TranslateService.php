<?php

namespace App\Services\Page\System;

use App\Contracts\Models;
use App\Traits\ViewChecker;
 
class TranslateService
{
    use ViewChecker;

    /**
     * @var languageInterface
     */
    private $languageInterface;
    
    /**
     * Account service constructor.
     * 
     * @param App\Contracts\Models\LanguageInterface $languageInterface
     */
    public function __construct(Models\LanguageInterface $languageInterface)
    {
        $this->languageInterface = $languageInterface;
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
        $this->languageInterface->create($request);

        return toastr()->success('Translate berhasil di buat', 'Translate');
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
                'translate' => $this->languageInterface->findById($id)
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
        $this->languageInterface->update($id, $request);

        return toastr()->success('Translate berhasil di ubah', 'Translate');
    }

    /**
     * Destroy function.
     * 
     * @param $id
     */
    public function destroy($id)
    {
        $this->languageInterface->deleteById($id);
        
        return toastr()->success('Translate berhasil di hapus', 'Translate');
    }
}