<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function create(){
        return view('users.create');
    }

    public function crear(){
        return view('users.prueba');
    }

    public function store(Request $request){
        // User::create($request->all());
        User::create($request->only('name','username','email') + 
        [
            'password' => bcrypt($request->input('password'))
        ]);
        return redirect()->back();
    }

    
}
