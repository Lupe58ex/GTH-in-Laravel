<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Area::create([
            'name'=>'Administrativo',
            'description'=>'Personal administrativo',
            'internal_code'=>'1',
            'appears_in'=>'E'
        ]);
        \App\Area::create([
            'name'=>'Ejecutivo',
            'description'=>'Personal Ejecutivo',
            'internal_code'=>'2',
            'appears_in'=>'E'
        ]);
        \App\Area::create([
            'name'=>'Empleado',
            'description'=>'Empleado',
            'internal_code'=>'3',
            'appears_in'=>'E'
        ]);
        \App\Area::create([
            'name'=>'Obrero',
            'description'=>'Obrero',
            'internal_code'=>'4',
            'appears_in'=>'E'
        ]);
        \App\Area::create([
            'name'=>'Operario',
            'description'=>'Operario',
            'internal_code'=>'5',
            'appears_in'=>'E'
        ]);
    }
}
