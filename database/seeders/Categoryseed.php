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
                'name' => "Travel",

            ],
            [
                'name' => "Education",
            ],
            [
                'name' => "Drink & Fruit",
            ],
            [
                'name' => "Health & care",
            ]
        ];

        foreach ($categories as $data) {
            category::create($data);
        }
    }
}
