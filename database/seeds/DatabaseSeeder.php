<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run all seeder 
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(Item_subjectsTableSeeder::class);
        $this->call(OffersTableSeeder::class); 	
        $this->call(Items_has__categoriesTableSeeder::class); 
    }
}
