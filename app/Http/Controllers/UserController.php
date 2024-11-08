<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function RegisterForm(): view 
    {
        return view('auth.register');
    }

    public function dashboard()
    {
        return view('auth.dashboard');
    }

    public function registerUser(Request $request)
    {
        // validate
            $request->validate([
                'name' => ['required','max:255','string'],
                'email' => ['required','string', 'email:rfc,dns','max:255','unique:users,email' ],
                'password' => ['required', 'string', 'min:3', 'confirmed']
            ]);

            
        // Register
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            
        // Login
        

        // Redirect
        return redirect()->route('auth.dashboard');
}

}