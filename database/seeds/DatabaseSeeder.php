<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
    	\Illuminate\Database\Eloquent\Model::unguard();

        $this->call(CategoriesTableSeeder::class);
        $this->command->info('Categories Seeded Successfully!');

        \Illuminate\Database\Eloquent\Model::reguard();
    }
}
