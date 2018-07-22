<?php

use Illuminate\Database\Seeder;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Condition::insert([

            [
                'name' => 'Baik'
            ],

            [
                'name' => 'Perlu Perbaikan'
            ],

            [
                'name' => 'Rusak'
            ]
        ]);
    }
}
