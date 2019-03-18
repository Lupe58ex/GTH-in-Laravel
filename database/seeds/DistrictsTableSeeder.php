<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\District::create([
            'name'=>'Chilca',
            'province_id'=>1
        ]);
        \App\District::create([
            'name'=>'El Tambo',
            'province_id'=>1
        ]);
        \App\District::create([
            'name'=>'Huancayo',
            'province_id'=>1
        ]);
    }
}
