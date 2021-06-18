<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Cliente']);
        $role3 = Role::create(['name' => 'Aliado']);
        $role4 = Role::create(['name' => 'Motorizado']);

        Permission::create(['name' => 'products.index',
        'description'=>'ver productos'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.index',
        'description'=>'ver dashboard index'])->syncRoles([$role2]);

    }
}
