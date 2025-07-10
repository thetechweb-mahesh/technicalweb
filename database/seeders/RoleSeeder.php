<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use App\Models\User;

public function run(): void
{
    // Create roles if not exist
    $superAdminRole = Role::firstOrCreate(['name' => 'super-admin']);
    $adminRole = Role::firstOrCreate(['name' => 'admin']);

    // Assign roles to users
    $superAdmin = User::find(1);
    if ($superAdmin) {
        $superAdmin->assignRole($superAdminRole);
    }

    $admin = User::find(2);
    if ($admin) {
        $admin->assignRole($adminRole);
    }
}
