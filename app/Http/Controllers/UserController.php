<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
    public function list(){
       $UserModel= User::get();
       return view('Users.index', compact('UserModel'));

    }

    public function delete($id){
        // dd($id);
        $UserModel=User::find($id);
        $UserModel->delete();
        return redirect()->route('users.list');
    }

    public function create(){
        $UserModel=User::get();
        return view('Users.create', compact('UserModel'));
    }

    public function store(UserStoreRequest $request){
        // dd($request->all());

        // $imageName = null;

        if($request->hasFile('image')){
            $imageName = time(). '.' . $request->image->extension();
            $request->image->move(public_path('ProductImages'), $imageName);
            // $validedData = array_merge($validedData, ['image' => $imageName]);
            //  dd($imageName);
        }

        // dd($request->all);

       User::create([
            'name'=> $request->name,
            'gender'=> $request->gender,
            'email'=> $request->email,
            'address'=> $request->address,
            'password'=> $request->password,
            'image'=> $imageName,
            'status'=> $request->has('status') ? true : false,
        ]);

        return redirect()->route('users.list');
    }
}
