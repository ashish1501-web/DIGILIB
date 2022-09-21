<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    
    public function register()
    {
        return view('Auth.digilibcard');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'userName' => 'required|max:8',
            'email' => 'required|unique:users|max:255',
            'phoneNumber'=>'required|unique:users',
            'password' => 'required|min:6|same:password_confirmation',
        ]);

        $user = new User();
        $user->userName = $request->userName;
        $user->email = $request->email;
        $user->phoneNumber = $request->phoneNumber;
        $user->password = Hash::make($request->password);

        $user->save();
        // User::create($request->all());
        return redirect()->route('login');
    }
   
}
