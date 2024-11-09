<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function home() : view
    {
        return view('auth.welcome');
    } 

    public function RegisterForm(): view 
    {
        return view('auth.register');
    }

    public function loginForm() : view 
    {
        return view('auth.login');    
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
             Auth::login($user); 

        // Redirect
        return redirect()->route('auth.dashboard');
    }
    
    public function login(Request $request) : RedirectResponse
    {
        
        $request->validate([
           'email'=> ['required','email'],
           'password' => 'required'  
        ]);

        $loginData = $request->only('email', 'password');


        
        if (Auth::attempt($loginData)) {
            return redirect()->intended('dashboard')->with('success', 'You have logged in successfully');
        }

        return redirect('login')->withErrors([
            'email' => 'wrong email',
            'password' => 'check password again'
        ]);
    }
    
    public function logout() : RedirectResponse 

    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

}