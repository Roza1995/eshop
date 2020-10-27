<?php

use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('testimonials')->insert(array (
        0 =>
          [
            'id' => '1',
            'title' => 'John Doe',
            'imgUrl' => 'assets/images/person_3.jpg',
            "description" => "Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        1 =>
          [
            'id' => '2',
            'title' => 'Roger Spears',
            'imgUrl' => 'assets/images/person_2.jpg',
            "description" => "Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        2 =>
          [
            'id' => '3',
            'title' => 'Kyle McDonald',
            'imgUrl' => 'assets/images/person_4.jpg',
            "description" => "Lightweight construction with breathable mesh fabric for maximum comfort and performance.Lace-up closure for a snug fit.High quality EVA sole for traction and exceptional durability.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ]
      ));
    }
}
