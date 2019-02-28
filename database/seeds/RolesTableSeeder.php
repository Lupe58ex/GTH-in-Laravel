<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::create([
            'name_long'=>'Adminitrador ',
            'name_short'=>'Administrador',
            'description'=>'Administrador',
            'loan_evaluator'=>false,
            'loan_promoter'=>false,
            'appears_in'=>'E'
        ]);
    }
}
