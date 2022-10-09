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
            'sidebar.menu',
            'main.menu',
            'admin.menu',
            'system.menu',
            'audit.menu',

            'task.index',
            'task.store',
            'task.create',
            'task.show',
            'task.update',
            'task.destroy',

            'akun.index',
            'akun.store',
            'akun.create',
            'akun.show',
            'akun.update',
            'akun.destroy',

            'role.index',
            'role.store',
            'role.create',
            'role.show',
            'role.update',
            'role.destroy',

            'translate.index',
            'translate.store',
            'translate.create',
            'translate.show',
            'translate.update',
            'translate.destroy',

            'category.index',
            'category.store',
            'category.create',
            'category.show',
            'category.update',
            'category.destroy',

            'menu.index',
            'menu.store',
            'menu.create',
            'menu.show',
            'menu.update',
            'menu.destroy',

            'page.index',
            'page.store',
            'page.create',
            'page.show',
            'page.update',
            'page.destroy',

            'application.index',
            'application.store',
            'application.create',
            'application.show',
            'application.update',
            'application.destroy',

            'model.index',
            'model.store',
            'model.create',
            'model.show',
            'model.update',
            'model.destroy',

            'auth.index',
            'auth.store',
            'auth.create',
            'auth.show',
            'auth.update',
            'auth.destroy',

            'system.index',
            'system.store',
            'system.create',
            'system.show',
            'system.update',
            'system.destroy',

            'query.index',
            'query.store',
            'query.create',
            'query.show',
            'query.update',
            'query.destroy'
        ];
    
        foreach ($permissions as $data) {
            Permission::create(['name' => $data]);
        };

        $perm1 = Permission::pluck('id','id')->all();
        Role::create(['name' => 'root'])->syncPermissions($perm1);

        $perm2 = [
            'main.menu',

            'task.index',
            'task.store',
            'task.create',
            'task.show',
            'task.update',
            'task.destroy',
        ];
        
        Role::create(['name' => 'user'])->syncPermissions($perm2);
    }
}