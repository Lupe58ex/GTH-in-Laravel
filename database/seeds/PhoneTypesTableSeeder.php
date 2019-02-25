<?php

use Illuminate\Database\Seeder;

class PhoneTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PhoneType::create([
            'name_long'=>'Fijo',
            'name_short'=>'Fijo'
        ]);
        \App\PhoneType::create([
            'name_long'=>'Móvil',
            'name_short'=>'Móvil'
        ]);
    }
}
