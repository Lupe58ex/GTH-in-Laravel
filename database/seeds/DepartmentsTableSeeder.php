<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Department::create([
            'name'=>'Huancavelica'
        ]);
        \App\Department::create([
            'name'=>'Junín'
        ]);
        \App\Department::create([
            'name'=>'Lima'
        ]);
    }
}
