<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Validator;

class ProfileController extends Controller
{
    public function index () : View 
    {
        return view('profile.profile');
    }

    public function updateUserName (Request $request)
    {
        $request->validate([
            'name' => ['string', 'required', 'max:255'],
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->save();

        return redirect('dashboard');
        
    }
    
}