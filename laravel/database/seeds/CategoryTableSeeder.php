<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'name' => 'Navidad'
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Halloween'
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Mujer, Madres, Amor y Amistad'
        ]);
    }
}
