<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [ 'name' => 'admin' , 'guard_name'=>'web'],
            [ 'name' => 'pengasuh', 'guard_name'=>'web'],
            [ 'name' => 'pimpinan', 'guard_name'=>'web'],
        ];

        Role::insert($roles);
    }
}
