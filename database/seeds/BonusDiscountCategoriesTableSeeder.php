<?php

use Illuminate\Database\Seeder;

class BonusDiscountCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\BonusDiscountCategory::create([
            'name'=>'Comisión',
            'description'=>'',
            'appears_in' =>'B'
        ]);
        \App\BonusDiscountCategory::create([
            'name'=>'Bonificación',
            'description'=>'',
            'appears_in' =>'B'
        ]);
        \App\BonusDiscountCategory::create([
            'name'=>'Descuento',
            'description'=>'',
            'appears_in' =>'B'
        ]);
        \App\BonusDiscountCategory::create([
            'name'=>'Feriado Laborado',
            'description'=>'',
            'appears_in' =>'D'
        ]);
        \App\BonusDiscountCategory::create([
            'name'=>'Por cargo',
            'description'=>'',
            'appears_in' =>'B'
        ]);
    }
}
