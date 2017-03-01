<?php
 
use Illuminate\Database\Seeder;
 
class ProductsSeeder extends Seeder {
 
    public function run()
    {
        DB::table('products')->delete();
 
        $products = array(
		['id' => 1, 'name' => 'Product 1', 'price' => 2500, 'short_description' => 'Short description', 'description' => 'Description'],
		['id' => 2, 'name' => 'Product 2', 'price' => 1000, 'short_description' => 'Short description', 'description' => 'Description'],
		['id' => 3, 'name' => 'Product 3', 'price' => 800, 'short_description' => 'Short description', 'description' => 'Description'],
		['id' => 4, 'name' => 'Product 4', 'price' => 19999, 'short_description' => 'Short description', 'description' => 'Description'],
        );
 
        DB::table('products')->insert($products);
    }
 
}


