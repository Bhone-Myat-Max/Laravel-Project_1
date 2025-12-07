<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    protected $UserRepository;
     public function __construct(UserRepositoryInterface $UserRepository){
        $this-> UserRepository = $UserRepository;
    }

    # List funtion
    public function list(){
       $UserModel=  $this->UserRepository->list();
       return view('Users.index', compact('UserModel'));
    }

    # delete funtion
    public function delete($id){

        $UserModel=$this->UserRepository->delete($id);
        $UserModel->delete();
        return redirect()->route('users.list');
    }

    # create funtion
    public function create(){
        $UserModel=$this->UserRepository->list();
        return view('Users.create', compact('UserModel'));
    }

    # store funtion
    public function store(UserStoreRequest $request){
        if($request->hasFile('image')){
            $imageName = time(). '.' . $request->image->extension();
            $request->image->move(public_path('UserImages'), $imageName);
        }
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

    # edit funtion
    public function edit($id){
        $UserModel = $this->UserRepository->delete($id);
        return view('Users.edit', compact('UserModel'));
    }

    # update funtion
    public function update(UserUpdateRequest $request){
        $UserModel = User::find($request->id);
        $UserModel->update([
            'name'=> $request->name,
            'gender'=> $request->gender,
            'email'=> $request->email,
            'address'=> $request->address,
            'password'=> $request->password,
            'status'=> $request->has('status') ? true : false,
        ]);
        return redirect()->route('users.list');
    }
}
