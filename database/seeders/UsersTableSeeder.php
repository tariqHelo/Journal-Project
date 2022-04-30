<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             $users = [
             [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$VOunUZVMv4bwC84FJngVdORh/3WOQsLYXcHOTcmsVFWTVWWg.V8/i',
                'remember_token' => null,
                'type' => 'Admin'
             ],
             [
                'id' => 2,
                'name' => 'User',
                'email' => 'user@user.com',
                'password' => '$2y$10$VOunUZVMv4bwC84FJngVdORh/3WOQsLYXcHOTcmsVFWTVWWg.V8/i',
                'remember_token' => null,
                'type' => 'Super-Admin'
             ],
             ];

             User::insert($users);

    }
}
