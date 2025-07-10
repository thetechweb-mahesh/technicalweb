<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $superAdminRole = Role::firstOrCreate(['name' => 'super-admin']);
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        $permissions = [
            // Category
            'add_category', 'edit_category', 'delete_category',
            // Service
            'add_service', 'edit_service', 'delete_service',
            // Blog
            'add_blog', 'edit_blog', 'delete_blog',
            // Content
            'add_content', 'edit_content', 'delete_content',
            // About
            'add_about', 'edit_about', 'delete_about',
            // Roles
            'view roles', 'create roles', 'edit roles', 'delete roles'
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm, 'guard_name' => 'web']);
        }

        $superAdminRole->syncPermissions($permissions);

        $adminRole->syncPermissions([
            'add_category', 'edit_category',
            'add_service', 'edit_service',
            'add_blog', 'edit_blog'
        ]);

        $superAdmin = User::where('role_as', 1)->first();
        $admin = User::where('role_as', 2)->first();

        if ($superAdmin) {
            $superAdmin->assignRole($superAdminRole);
        }

        if ($admin) {
            $admin->assignRole($adminRole);
        }
    }
}
