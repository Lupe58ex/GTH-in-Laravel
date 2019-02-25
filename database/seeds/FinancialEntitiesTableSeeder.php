<?php

use Illuminate\Database\Seeder;

class FinancialEntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\FinancialEntity::create([
            'name_long'=>'Caja Huancayo',
            'name_short'=>'Caja Huancayo'
        ]);
        \App\FinancialEntity::create([
            'name_long'=>'Banco de crédito del Perú',
            'name_short'=>'BCP'
        ]);
    }
}
