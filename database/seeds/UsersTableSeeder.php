<?php

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
        \App\User::insert([

            [
                'name' => 'Administrator',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin'),
                'role_id' => 1,
                'program_id' => 1,
            ],

            [
                'name' => 'Prodi Teknik Informatika',
                'email' => 'informatika@unipma.ac.id',
                'password' => bcrypt('informatika'),
                'role_id' => 2,
                'program_id' => 1,
            ],

            [
                'name' => 'Prodi Teknik Elektronika',
                'email' => 'elektronika@unipma.ac.id',
                'password' => bcrypt('elektronika'),
                'role_id' => 2,
                'program_id' => 1,
            ]
        ]);
    }
}
