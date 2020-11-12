<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        [
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'role' => '1',
            'password' => bcrypt('admin@123'),
            'created_at' => '2019-09-17 11:44:55',
            'updated_at' => '2019-09-17 11:44:55',
        ],
        [
            'id' => 2,
            'name' => 'ron',
            'email' => 'ron@example.com',
            'role' => '2',
            'password' => bcrypt('admin@123'),
            'created_at' => '2019-09-17 11:44:55',
            'updated_at' => '2019-09-17 11:44:55',
        ]
    ];

        DB::table('users')->insert($users);
    }
}
