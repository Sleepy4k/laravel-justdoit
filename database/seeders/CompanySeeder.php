<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            [
                'name' => 'Benjamin4k',
                'website' => 'quintet.group.id'
            ]
        ];

        foreach ($companies as $data) {
            Company::create($data);
        }
    }
}