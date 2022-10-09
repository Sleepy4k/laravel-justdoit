<?php

namespace App\Services\Page\Main;

use App\Traits\ViewChecker;
use App\Traits\ChartConvert;
 
class DashboardService
{
    use ViewChecker, ChartConvert;

    /**
     * Index function.
     * 
     * @param $path
     */
    public function index($path)
    {
        if ($this->checkView($path)) {
            return [
                // 
            ];
        }
    }
}