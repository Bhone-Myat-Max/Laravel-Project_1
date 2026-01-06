<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;


class UserRepository implements UserRepositoryInterface
{

        public function list(){
            return User::get();
        }

        //  public function show($id){
        //     return User::find($id);
        //  }


        // public function store($validedData){
        //     return Product::create($validedData);
        // }
        public function delete($id){
            return User::find($id);
        }


}
