<?php

namespace App\Http\Controllers\Page\Audit;

use App\Http\Controllers\Controller;
use App\DataTables\Audit\ModelDataTable;
use App\Services\Page\Audit\ModelService;

class ModelController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.audit.model';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ModelService $service, ModelDataTable $dataTable)
    {
        $service->index(static::$path);

        return $dataTable->render(static::$path);
    }
}