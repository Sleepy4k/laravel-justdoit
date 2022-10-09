<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'main',
                'label' => 'Main Menu',
                'permission' => 'main.menu'
            ],
            [
                'name' => 'admin',
                'label' => 'Admin Menu',
                'permission' => 'admin.menu'
            ],
            [
                'name' => 'system',
                'label' => 'System Menu',
                'permission' => 'system.menu'
            ],
            [
                'name' => 'audit',
                'label' => 'Audit Menu',
                'permission' => 'audit.menu'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}