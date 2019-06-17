<?php

use Illuminate\Database\Seeder;

class PensionSystemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PensionSystem::create([
            'name' => 'Organismo Nacional De Pensiones',
            'short_name' => 'ONP',
            'description' => '',
            'actual_percent'=> 9.00,
            //'comission_on_flow'=> 
            //'annual_comission'=>
            //'comission_for_flow'=>
            //'insurance_premium'=>
            //'mandatory_contribution'=>
        ]);
        \App\PensionSystem::create([
            'name' => 'AFP Habitat',
            'short_name' => 'AFP HABITAT',
            'description' => '',
            'actual_percent'=> 10.00,
            //'comission_on_flow'=> 
            //'annual_comission'=>
            //'comission_for_flow'=>
            //'insurance_premium'=>
            //'mandatory_contribution'=>
        ]);
        \App\PensionSystem::create([
            'name' => 'AFP Grupo Integra',
            'short_name' => 'AFP Integra',
            'description' => '',
            'actual_percent'=> 11.00,
            //'comission_on_flow'=> 
            //'annual_comission'=>
            //'comission_for_flow'=>
            //'insurance_premium'=>
            //'mandatory_contribution'=>
        ]);
    }
}
