<?php

use Illuminate\Database\Seeder;

class PhoneOperatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PhoneOperator::create([
            'name_long'=>'Movistar',
            'name_short'=>'Movistar'
        ]);
        \App\PhoneOperator::create([
            'name_long'=>'Claro',
            'name_short'=>'Claro'
        ]);
    }
}
