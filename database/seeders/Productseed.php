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
                'Description' => "Organic food, can eat, can make juice"
            ],
            [
                'id'=> 2,
                'name' => "Watermelon",
                'price' => 40,
                'Description' => "Organic food, can eat, can make juice"
            ],
            [
                'id'=> 3,
                'name' => "Orange",
                'price' => 25,
                'Description' => "Organic food, can eat, can make juice"
            ],
            [
                'id'=> 4,
                'name' => "Potato",
                'price' => 30,
                'Description' => "Organic food, can fry, can eat"
            ]
        ];

        foreach ($Products as $data) {
            Product::create($data);
        }
    }
}
