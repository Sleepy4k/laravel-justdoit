<?php
  
namespace App\Traits;

trait LogReader
{
    /**
     * Read Laravel Log
     */
    protected function getFileContent($type, $channel = 'laravel', $date = null)
    {
        $pattern = "/^\[(?<date>.*)\]\s(?<env>\w+)\.(?<type>\w+):(?<message>.*)/m";

        $content = null;

        if ($type == 'daily') {
            if ($date) {
                $content = file_get_contents(storage_path('logs/'.$channel.'-'.$date.'.log'));
            } else {
                $content = file_get_contents(storage_path('logs/'.$channel.'-'.now()->format('Y-m-d').'.log'));
            }
        } else {
            $content = file_get_contents(storage_path('logs/'.$channel.'.log'));
        }

        preg_match_all($pattern, $content, $matches, PREG_SET_ORDER, 0);

        $logs = [];
        foreach ($matches as $match) {
            $logs[] = [
                'timestamp' => $match['date'],
                'env' => $match['env'],
                'type' => $match['type'],
                'date' => now()->format('Y-m-d'),
                'message' => trim($match['message'])
            ];
        }

        return [
            'logs' => $logs
        ];
    }
}