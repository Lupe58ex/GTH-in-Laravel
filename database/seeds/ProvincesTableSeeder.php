<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Province::create([
            'name'=>'Huancayo',
            'department_id'=>1
        ]);
        \App\Province::create([
            'name'=>'Tarma',
            'department_id'=>1
        ]);
        \App\Province::create([
            'name'=>'La Merced',
            'department_id'=>1
        ]);
    }
}
