<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $applications = [
            [
                'name' => config('app.name'),
                'author' => config('meta.author'),
                'keywords' => config('meta.keyword'),
                'description' => config('meta.description')
            ]
        ];

        foreach ($applications as $application) {
            Application::create($application);
        }
    }
}