<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'dashboard.index',

            'tour.index',
            'tour.store',
            'tour.create',
            'tour.show',
            'tour.update',
            'tour.destroy',

            'transaction.index',
            'transaction.store',
            'transaction.create',
            'transaction.update',
            'transaction.destroy',

            'account.index',
            'account.store',
            'account.create',
            'account.update',
            'account.destroy',

            'akun.index',
            'akun.store',
            'akun.create',
            'akun.update',
            'akun.destroy',

            'role.index',
            'role.store',
            'role.create',
            'role.update',
            'role.destroy',

            'translate.index',
            'translate.store',
            'translate.create',
            'translate.update',
            'translate.destroy',

            'category.index',
            'category.store',
            'category.create',
            'category.update',
            'category.destroy',

            'menu.index',
            'menu.store',
            'menu.create',
            'menu.update',
            'menu.destroy',

            'page.index',
            'page.store',
            'page.create',
            'page.update',
            'page.destroy',

            'application.index',
            'application.store',
            'application.create',
            'application.update',
            'application.destroy',

            'model.index',
            'auth.index',
            'system.index',
            'query.index',
        ];
    
        foreach ($permissions as $data) {
            Permission::create(['name' => $data]);
        };

        Role::create(['name' => 'root'])->syncPermissions(Permission::pluck('id','id')->all());
        
        Role::create(['name' => 'manager'])->syncPermissions([
            'dashboard.index',

            'transaction.index',
            'transaction.store',
            'transaction.create',
            'transaction.update',
            'transaction.destroy',

            'tour.index',
            'tour.store',
            'tour.create',
            'tour.show',
            'tour.update',
            'tour.destroy',
        ]);

        Role::create(['name' => 'loket'])->syncPermissions([
            'dashboard.index',

            'transaction.index',
            'transaction.store',
            'transaction.create',
            'transaction.update',
            'transaction.destroy',
        ]);
    }
}