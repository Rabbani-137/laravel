<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\validation\ValidationException;

class AuthController extends Controller
{
    public function register(){
        return view('auth/register');
    }

    public function registerSave(Requst $request){
        Validator:make($request->all(), [
            'name'=>'required',
            'email'=>'required | email',
            'password'=>'required | confirmed'
        ])->validate();
        
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'level' => 'admin'
        // ]);
        
        // return redirect()->route('login');
     }
}