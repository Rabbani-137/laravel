<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\validation\ValidationException;

class AuthController extends Controller
{
    
    public function register(){
        return view('auth/register');
    }

    public function registerSave(Request $request){
    //     $request->validate([
    //         'name'=>'required',
    //         'email'=>'required | email',
    //         'password'=>'required '
    //     ]);

        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'level' => 'admin'
        // ]); 

        
    
        Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required | email',
            'password'=>'required | confirmed'
        ])->validate();
         
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'admin'
        ]);
        
        return redirect()->route('login');
     }

     public function login(){
        return view('auth/login');
    }

    public function loginAction(Request $request){
        $request->validate([
                     'email'=>'required | email',
                     'password'=>'required'
        ]);
        
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))){ //remember boolean true false
            throw ValidationException::withMessages([    //throgh a message
                'email' => trans('auth.failed')       //if login faield
            ]);
        }

        $request->session()->regenerate();   //generate for the login session

        return redirect()->route('dashboard');
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        
        $request()->session()->invalidate();
        
        return redirect('/');
    }

    public function profile(){
        return view('profile');
    }

}