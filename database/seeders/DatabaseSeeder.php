<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
              $dataUser = [
        [
          "username" => "putrawibawa9",
          "password" => "123",
        ]
        ];

        $dataProduct = [
         [
                "product_name"=> "Nasi Ayam",
                "stock"=> 4,
                "product_desc"=> "Nasi ayam enak",
                "picture"=> 'foto1.jpg',
                "category_id"=> 1,
                "created_at"=> null,
                "updated_at"=> null
              ],
                [
                "product_name"=> "Es Teh",
                "stock"=> 7,
                "product_desc"=> "Es teh enak",
                "picture"=> 'foto2.jpg',
                "category_id"=> 2,
                "created_at"=> null,
                "updated_at"=> null
              ],
                [
                "product_name"=> "Es Teh",
                "stock"=> 7,
                "product_desc"=> "Es teh enak",
                "picture"=> 'foto2.jpg',
                "category_id"=> 2,
                "created_at"=> null,
                "updated_at"=> null
              ],
                [
                "product_name"=> "Es Teh",
                "stock"=> 7,
                "product_desc"=> "Es teh enak",
                "picture"=> 'foto2.jpg',
                "category_id"=> 2,
                "created_at"=> null,
                "updated_at"=> null
              ],
                [
                "product_name"=> "Es Teh",
                "stock"=> 7,
                "product_desc"=> "Es teh enak",
                "picture"=> 'foto2.jpg',
                "category_id"=> 2,
                "created_at"=> null,
                "updated_at"=> null
              ],
                [
                "product_name"=> "Es Teh",
                "stock"=> 7,
                "product_desc"=> "Es teh enak",
                "picture"=> 'foto2.jpg',
                "category_id"=> 2,
                "created_at"=> null,
                "updated_at"=> null
              ],
              
            ];

              $dataCategory = [
         [
                "category_name"=> "Makanan",
                "created_at"=> null,
                "updated_at"=> null
              ],
                [
                "category_name"=> "Minuman",
                "created_at"=> null,
                "updated_at"=> null
              ],
              
            ];

             User::insert($dataUser);
             Product::insert($dataProduct);
             Category::insert($dataCategory);
    }
}
