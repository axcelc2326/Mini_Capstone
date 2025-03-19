<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define permissions
        $permissions = ['report-lost-item', 'report-found-item', 'manage-items', 'manage-users'];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles
        $userRole = Role::create(['name' => 'user']);
        $adminRole = Role::create(['name' => 'admin']);

        // Assign permissions
        $userRole->givePermissionTo(['report-lost-item', 'report-found-item']);
        $adminRole->givePermissionTo($permissions);

        // Create users
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);
        
        $regularUser = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123')
        ]);

        // Assign roles
        $admin->assignRole('admin');
        $regularUser->assignRole('user');
    }
}