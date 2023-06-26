<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
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
                'name'           => 'Administrator',
                'email'          => 'admin@admin',
                'password'       => bcrypt('adminadmin'),
                'remember_token' => null,
            ]
        ];

        User::insert($users);
    }
}
