<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class Userseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata =[
            [
                // 'id'=>1,
                'name'=>"Bhone Myat",
                'gender'=>"male",
                'email'=>"sddfdsf6590@gmail.com",
                'address'=>"Yangon, Shwe Pauk kan, Botayza Road",
                'image'=>"Image",
                'password'=> Hash::make("password"),



            ],
            [
                // 'id'=>2,
                'name'=>"Bhone Naing",
                'gender'=>"male",
                'email'=>"sdfdsf6590@gmail.com",
                'address'=>"Mandalay, Shwe Pauk kan, Botayza Road",
                'image'=>"Image",
                'password'=> Hash::make("password"),

            ],
            [
                // 'id'=>3,
                'name'=>"Min Myat",
                'gender'=>"male",
                'email'=>"sddfd6590@gmail.com",
                'address'=>"Yangon, Shwe Pauk kan, Botayza Road",
                'image'=>"Image",
                'password'=> Hash::make("password"),

            ],
            ];
            foreach ($userdata as $userInfo) {
                User::Create($userInfo);
            }
    }
}
