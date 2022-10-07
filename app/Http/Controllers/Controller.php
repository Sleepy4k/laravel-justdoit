<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Base;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends Base
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
