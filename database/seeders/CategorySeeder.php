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
                'label' => 'Main Menu'
            ],
            [
                'name' => 'setting',
                'label' => 'Setting Menu'
            ],
            [
                'name' => 'admin',
                'label' => 'Admin Menu'
            ],
            [
                'name' => 'system',
                'label' => 'System Menu'
            ],
            [
                'name' => 'audit',
                'label' => 'Audit Menu'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}