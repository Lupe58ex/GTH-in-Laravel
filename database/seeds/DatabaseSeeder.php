<?php

use Illuminate\Database\Seeder;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(ViasTableSeeder::class);
        $this->call(ContractTypesTableSeeder::class);
        $this->call(FinancialEntitiesTableSeeder::class);
        $this->call(IdentificationTypesTableSeeder::class);
        $this->call(JobTypesTableSeeder::class);
        $this->call(PhoneOperatorsTableSeeder::class);
        $this->call(PhoneTypesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
