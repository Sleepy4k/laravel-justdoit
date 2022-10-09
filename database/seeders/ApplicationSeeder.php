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
        Application::create([
            'application_name' => 'Just Do It',
            'application_author' => 'Benjamin4k',
            'application_keywords' => 'Todo list, Note, Laravel',
            'application_description' => 'Todo list app that let you take notes for everyday',
            'sidebar_name' => 'JustDoIt'
        ]);
    }
}