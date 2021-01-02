<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            [
                'id' => '1',
                'name' => 'Product1',
                'price' => '100',
                'created_at' => '2019-11-27 12:41:40',
                'updated_at' => '2019-11-27 12:41:41',
            ], 
            [
                'id' => '2',
                'name' => 'Product2',
                'price' => '200',
                'created_at' => '2019-11-27 12:41:40',
                'updated_at' => '2019-11-27 12:41:41',
            ],
            [
                'id' => '3',
                'name' => 'Product3',
                'price' => '300',
                'created_at' => '2019-11-27 12:41:40',
                'updated_at' => '2019-11-27 12:41:41',
            ],
            [
                'id' => '4',
                'name' => 'Product4',
                'price' => '400',
                'created_at' => '2019-11-27 12:41:40',
                'updated_at' => '2019-11-27 12:41:41',
            ],
            [
                'id' => '5',
                'name' => 'Product5',
                'price' => '5100',
                'created_at' => '2019-11-27 12:41:40',
                'updated_at' => '2019-11-27 12:41:41',
            ]
        ]);
    }
}
