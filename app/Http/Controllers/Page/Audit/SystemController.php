<?php

namespace App\Http\Controllers\Page\Audit;

use App\Http\Controllers\Controller;
use App\DataTables\Audit\SystemDataTable;
use App\Services\Page\Audit\SystemService;

class SystemController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.audit.system';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SystemService $service, SystemDataTable $dataTable)
    {
        $service->index(static::$path);

        return $dataTable->render(static::$path);
    }
}