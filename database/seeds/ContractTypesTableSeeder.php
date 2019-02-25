<?php

use Illuminate\Database\Seeder;

class ContractTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ContractType::create([
            'name'=>'Indeterminado',
            'short_name'=>'Indeterminado',
            'suggested_duration'=>'1',
            'appears_in'=>'E'
        ]);
        \App\ContractType::create([
            'name'=>'Por necesidad de mercado',
            'short_name'=>'Por necesidad de mercado',
            'suggested_duration'=>'2',
            'appears_in'=>'E'
        ]);
        \App\ContractType::create([
            'name'=>'Renovación',
            'short_name'=>'Renovación',
            'suggested_duration'=>'3',
            'appears_in'=>'E'
        ]);

    }
}
