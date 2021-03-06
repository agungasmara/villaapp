<?php

use App\Models\Auth\User;
use Illuminate\Database\Seeder;

/**
 * Class UserRoleTableSeeder.
 */
class UserRoleTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();

        User::find(1)->assignRole(config('access.users.admin_role'));
        User::find(2)->assignRole(config('access.users.owner_role'));
        User::find(3)->assignRole(config('access.users.operational_manager_role'));
        User::find(4)->assignRole(config('access.users.operational_staff_role'));
        User::find(5)->assignRole(config('access.users.akunting_manager_role'));
        User::find(6)->assignRole(config('access.users.akunting_staff_role'));
        User::find(6)->assignRole(config('access.users.butler_role'));
        User::find(7)->assignRole(config('access.users.default_role'));

        $this->enableForeignKeys();
    }
}
