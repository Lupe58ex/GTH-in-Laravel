<?php

use Illuminate\Database\Seeder;

class ViasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Via::create([
            'name_long'=>'Jirón',
            'name_short'=>'Jr.'
        ]);
        \App\Via::create([
            'name_long'=>'Avenida',
            'name_short'=>'Av.'
        ]);
        \App\Via::create([
            'name_long'=>'Pasaje',
            'name_short'=>'Psje.'
        ]);
        \App\Via::create([
            'name_long'=>'Calle',
            'name_short'=>'Calle'
        ]);
    }
}
