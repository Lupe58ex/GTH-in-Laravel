<?php

use Illuminate\Database\Seeder;

class IdentificationTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\IdentificationType::create([
            'name_long'=>'Documento Nacioanl de Identificación',
            'name_short'=>'DNI'
        ]);
        \App\IdentificationType::create([
            'name_long'=>'Pasaporte',
            'name_short'=>'Pasaporte'
        ]);
    }
}
