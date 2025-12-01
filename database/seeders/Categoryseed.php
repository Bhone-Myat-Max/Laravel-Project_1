<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Categoryseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories =[
            [
                'id'=> 1,
                'name' => "Travel",

            ],
            [
                'id'=> 2,
                'name' => "Education",
            ],
            [
                'id'=> 3,
                'name' => "Drink & Fruit",
            ],
            [
                'id'=> 4,
                'name' => "Health & care",
            ]
        ];

        foreach ($categories as $data) {
            category::create($data);
        }
    }
}
