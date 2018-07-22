<?php

use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Program::insert([

            [
                'name' => 'Teknik Informatika',
            ],
            [
                'name' => 'Teknik Elektronika',
            ]
        ]);
    }
}
