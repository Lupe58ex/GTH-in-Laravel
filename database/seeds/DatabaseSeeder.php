<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Bonus_Discount_Category;

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
        $this->call(ContractTypesTableSeeder::class);
        $this->call(FinancialEntitiesTableSeeder::class);
        $this->call(IdentificationTypesTableSeeder::class);
        $this->call(JobTypesTableSeeder::class);
        $this->call(PhoneOperatorsTableSeeder::class);
        $this->call(PhoneTypesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(AgenciesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(PensionSystemsTableSeeder::class);
        $this->call(BonusDiscountCategoriesTableSeeder::class);
    }
}
