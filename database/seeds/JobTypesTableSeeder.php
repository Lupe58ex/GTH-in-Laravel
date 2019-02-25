<?php

use Illuminate\Database\Seeder;

class JobTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\JobType::create([
            'name'=>'Full Time'
        ]);
        \App\JobType::create([
            'name'=>'Part Time'
        ]);
    }
}
