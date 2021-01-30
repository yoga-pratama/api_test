<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getUser(){

        $user = User::all();
      //  $user2 = User::where('username' ,'like', 'j%')->get();
        

        return response()->json([
            'users'  => $user
        ]);

    }


    public function addUser(Request $request){

        $name = $request->name;
        $username = $request->username;
        $password = $request->password;
        $email = $request->email;

        $addUser =  new User();
        $addUser->name = $name;
        $addUser->username = $username;
        $addUser->password = $password;
        $addUser->email = $email;
        $addUser->save();

        return response()->json([
            'message' => 'Data Tersimpan'
        ],201);

    }
}
