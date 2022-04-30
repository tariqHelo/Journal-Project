<?php

namespace Database\Seeders;
use App\Models\Role;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $roles = [
            [
            'id' => 1,
            'title' => 'Super-Admin',
            ],
            [
            'id' => 2,
            'title' => 'Leader',
            ],
            [
            'id' => 3,
            'title' => 'Employee',
            ],
            // [
            // 'id' => 5,
            // 'title' => 'Super-Admin',
            // ],
            // [
            // 'id' => 6,
            // 'title' => 'Manager',
            // ],
            // [
            // 'id' => 7,
            // 'title' => 'Leader',
            // ],
            // [
            // 'id' => 8,
            // 'title' => 'Employee',
            // ]
         ];

         Role::insert($roles);
    }
}
