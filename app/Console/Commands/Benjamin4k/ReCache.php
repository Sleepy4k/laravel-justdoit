<?php

namespace App\Console\Commands\Benjamin4k;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ReCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'benjamin4k:recache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove all cache and cache it again';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Clear old cache
        Artisan::call('optimize:clear');

        // Notify when clear is done
        $this->info('Route cache cleared!');
        $this->info('Configuration cache cleared!');
        $this->info('Compiled views cleared!');
        $this->info('Cached events cleared!');

        // Notify starting system
        $this->info('Regenerate cache!');

        // Generate new cache
        Artisan::call('route:cache');
        $this->info('Routes cached successfully!');

        Artisan::call('config:cache');
        $this->info('Configuration cached successfully!');

        Artisan::call('view:cache');
        $this->info('Blade templates cached successfully!');
        
        Artisan::call('event:cache');
        $this->info('Events cached successfully!');

        // Notify
        $this->info('Cache successfuly regenerate!');

        return Command::SUCCESS;
    }
}
