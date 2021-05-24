<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@2021'),
            'is_admin' => true,

        ]);

        DB::table('user_roles')->insert([
            'name' => 'superadmin',
            'label' => 'Super Admin',
        ], [
            'name' => 'admin',
            'label' => 'Admin',
        ], [
            'name' => 'editor',
            'label' => 'Editor',
        ],
        );

    }
}
