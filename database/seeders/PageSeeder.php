<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'name' => 'sidebar-category',
                'label' => 'Kategori',
                'menu_id' => 6,
                'icon' => 'bars',
                'page_url' => 'category.index',
                'permission' => 'category.index'
            ],
            [
                'name' => 'sidebar-menu',
                'label' => 'Menu',
                'menu_id' => 6,
                'icon' => 'bars',
                'page_url' => 'menu.index',
                'permission' => 'menu.index'
            ],
            [
                'name' => 'sidebar-page',
                'label' => 'Halaman',
                'menu_id' => 6,
                'icon' => 'bars',
                'page_url' => 'page.index',
                'permission' => 'page.index'
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}