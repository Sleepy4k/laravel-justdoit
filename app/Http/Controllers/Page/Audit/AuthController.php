<?php

namespace App\Http\Controllers\Page\Audit;

use App\Http\Controllers\Controller;
use App\DataTables\Audit\AuthDataTable;
use App\Services\Page\Audit\AuthService;

class AuthController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.audit.auth';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthService $service, AuthDataTable $dataTable)
    {
        $service->index(static::$path);

        return $dataTable->render(static::$path);
    }
}