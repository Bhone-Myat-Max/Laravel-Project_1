<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Productseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             $Products =[
            [
                'id'=> 1,
                'name' => "Apple",
                'price' => 10,
            ],
            [
                'id'=> 2,
                'name' => "Watermelon",
                'price' => 40,
            ],
            [
                'id'=> 3,
                'name' => "Orange",
                'price' => 25,
            ],
            [
                'id'=> 4,
                'name' => "Potato",
                'price' => 30,
            ]
        ];

        foreach ($Products as $data) {
            Product::create($data);
        }
    }
}
