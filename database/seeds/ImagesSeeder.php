<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('images')->insert(array (
        0 =>
          [
            'id' => '1',
            'src' => 'assets/images/model_1_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        1 =>
          [
            'id' => '2',
            'src' => 'assets/images/model_2_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        2 =>
          [
            'id' => '3',
            'src' => 'assets/images/model_3_bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        3 =>
          [
            'id' => '4',
            'src' => 'assets/images/person_1.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        4 =>
          [
            'id' => '5',
            'src' => 'assets/images/person_2.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        5 =>
          [
            'id' => '6',
            'src' => 'assets/images/person_3.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ]));

    }

}
