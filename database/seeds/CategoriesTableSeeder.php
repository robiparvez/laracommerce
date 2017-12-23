<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
        	'name' => 'Full Shirt'
        ]);

        DB::table('categories')->insert([
        	'name' => 'Half Shirt'
        ]);
    }
}
