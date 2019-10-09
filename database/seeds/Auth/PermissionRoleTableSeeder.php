<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/**
 * Class PermissionRoleTableSeeder.
 */
class PermissionRoleTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Create Roles
        Role::create(['name' => config('access.users.admin_role')]);
        Role::create(['name' => config('access.users.owner_role')]);
        Role::create(['name' => config('access.users.operational_manager_role')]);
        Role::create(['name' => config('access.users.operational_staff_role')]);
        Role::create(['name' => config('access.users.akunting_manager_role')]);
        Role::create(['name' => config('access.users.akunting_staff_role')]);
        Role::create(['name' => config('access.users.default_role')]);

        // Create Permissions
        Permission::create(['name' => 'view backend']);

        // Assign Permissions to other Roles
        // Note: Admin (User 1) Has all permissions via a gate in the AuthServiceProvider
        // $user->givePermissionTo('view backend');

        $this->enableForeignKeys();
    }
}
