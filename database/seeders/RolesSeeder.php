<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create permissions
        Permission::create(['name' => 'create-post']);
        Permission::create(['name' => 'read-post']);
        Permission::create(['name' => 'update-post']);
        Permission::create(['name' => 'delete-post']);

        // Create roles and assign existing permissions
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo(Permission::all());

        $viewerRole = Role::create(['name' => 'user']);
        $viewerRole->givePermissionTo('read-post');

        $superAdminEmail = "admin@hrz-corp.com";
        
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => $superAdminEmail,
        ]);

        $user = User::firstWhere("email", $superAdminEmail);
        $user->assignRole('admin');

        $userTest = "user-test@hrz-corp.com";

        User::factory()->create([
            'name' => 'User Test',
            'email' => $userTest,
        ]);

        $user = User::firstWhere("email", $userTest);
        $user->assignRole('user');
    }
}
