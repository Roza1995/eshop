<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert(array (
        0 =>
          [
            'id' => '1',
            'price' => '200',
            'name' => 'Women Snickers',
            'type' => 'Shoes',
            'description' => 'Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.',
            'imgUrl' => 'assets/images/model_1_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        1 =>
          [
            'id' => '2',
            'price' => '300',
            'name' => 'Men Shirts',
            'type' => 'T-Shirts',
            'description' => 'Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.',
            'imgUrl' => 'assets/images/model_2_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        2 =>
          [
            'id' => '3',
            'price' => '300',
            'name' => 'Women Bag',
            'type' => 'Bags',
            'description' => 'Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.',
            'imgUrl' => 'assets/images/model_3_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        3 =>
          [
            'id' => '4',
            'price' => '258',
            'name' => 'Men Shirts',
            'type' => 'Hats',
            'description' => 'Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.',
            'imgUrl' => 'assets/images/model_1_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        4 =>
          [
            'id' => '5',
            'price' => '345',
            'name' => 'Men Shirts',
            'type' => 'Shirts',
            'description' => 'Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.',
            'imgUrl' => 'assets/images/model_2_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        5 =>
          [
            'id' => '6',
            'price' => '451',
            'name' => 'Men Shirts',
            'type' => 'Etc',
            'description' => 'Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.',
            'imgUrl' => 'assets/images/model_3_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        6 =>
          [
            'id' => '7',
            'price' => '451',
            'name' => 'Men Shirts',
            'type' => 'Etc',
            'description' => 'Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.',
            'imgUrl' => 'assets/images/model_4_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        7 =>
          [
            'id' => '8',
            'price' => '235',
            'name' => 'Men Shirts',
            'type' => 'Etc',
            'description' => 'Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.',
            'imgUrl' => 'assets/images/model_5_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        8 =>
          [
            'id' => '9',
            'price' => '100',
            'name' => 'Men Shirts',
            'type' => 'Etc',
            'description' => 'Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.',
            'imgUrl' => 'assets/images/model_1_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        9 =>
          [
            'id' => '10',
            'price' => '245',
            'name' => 'Men Shirts',
            'type' => 'Etc',
            'description' => 'Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.',
            'imgUrl' => 'assets/images/model_4_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        10 =>
          [
            'id' => '11',
            'price' => '500',
            'name' => 'Men Shirts',
            'type' => 'Etc',
            'description' => 'Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.',
            'imgUrl' => 'assets/images/model_5_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        11 =>
          [
            'id' => '12',
            'price' => '450',
            'name' => 'Men Shirts',
            'type' => 'Etc',
            'description' => 'Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.',
            'imgUrl' => 'assets/images/model_2_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        ));

    }
}
