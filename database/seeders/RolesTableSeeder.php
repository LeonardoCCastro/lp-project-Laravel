<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        if (!Role::where('name', 'admin')->exists()) {
            Role::create([
                'name' => 'admin',
                'guard_name' => 'web',
            ]);
        }

        if (!Role::where('name', 'user')->exists()) {
            Role::create([
                'name' => 'user',
                'guard_name' => 'web',
            ]);
        }
    }
}
