<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function RegisterForm(): view 
    {
        return view('register');
    }
    
    public function registerUser(Request $request){
        $validatedData = $request->validate([
           'name' => ['required', 'max:255'],
           'email' => ['required', ],
           'password' => ['required' , 'min:4' , 'email' , 'confirmed']
        ]);
    }
}