 <?php
 
use Illuminate\Database\Seeder;
 
class ProductsImagesSeeder extends Seeder {
 
    public function run()
    {
        DB::table('products_images')->delete();

        $images = array(
 		['id' => 1, 'product_id' => 1, 'name' => 'Image 1', 'url' => '/public/products/product.png'],
		['id' => 2, 'product_id' => 1, 'name' => 'Image 2', 'url' => '/public/products/product.png'],
		['id' => 3, 'product_id' => 2, 'name' => 'Image 1', 'url' => '/public/products/product.png'],
		['id' => 4, 'product_id' => 3, 'name' => 'Image 1', 'url' => '/public/products/product.png'],
		['id' => 5, 'product_id' => 4, 'name' => 'Image 1', 'url' => '/public/products/product.png'],
        );
 
        DB::table('products_images')->insert($images);
    }
 
}
