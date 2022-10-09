<?php

namespace App\Http\Controllers\Page\Audit;

use App\Http\Controllers\Controller;
use App\DataTables\Audit\QueryDataTable;
use App\Services\Page\Audit\QueryService;

class QueryController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.audit.query';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(QueryService $service, QueryDataTable $dataTable)
    {
        $service->index(static::$path);

        return $dataTable->render(static::$path);
    }
}