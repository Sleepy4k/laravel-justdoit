<?php
  
namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait ChartConvert
{
    /**
     * Get Farm Data
     */
    protected function getTableData($table, $company, $cause = 'created_at', $raw = null)
    {
        $year = date('Y');
        $data = [];

        for($i = 1; $i <= 12; $i++){
            if ($raw == null) {
                $data[] = DB::table($table)->where('company', $company)->whereMonth($cause, $i)->whereYear($cause, $year)->count();
            } else {
                $data[] = DB::table($table)->where([['company', $company], $raw])->whereMonth($cause, $i)->whereYear($cause, $year)->count();
            }
        }

        return $data;
    }
    
    /**
     * Select Farm Data
     */
    protected function selectTableData($table, $company, $raw, $cause = 'created_at', $type = 'avg')
    {
        $year = date('Y');
        $data = [];

        for($i = 1; $i <= 12; $i++){
            if ($type == 'avg') {
                $data[] = floatval(DB::table($table)->where('company', $company)->whereMonth($cause, $i)->whereYear($cause, $year)->avg($raw));
            } elseif ($type == 'sum') {
                $data[] = floatval(DB::table($table)->where('company', $company)->whereMonth($cause, $i)->whereYear($cause, $year)->sum($raw));
            } elseif ($type == 'count') {
                $data[] = DB::table($table)->where('company', $company)->whereMonth($cause, $i)->whereYear($cause, $year)->count($raw);
            }
        }

        return $data;
    }
}