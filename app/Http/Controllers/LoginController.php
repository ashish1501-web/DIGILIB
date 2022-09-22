<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\favourite;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    // To store the login info and check if it matches existing data
    public function store(Request $request)
    {
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
           if(Auth::user()->role == '2'){
                return redirect()->route('Admin.Dashboard');
            }else{
                return redirect()->route('home');
            }
           
        }
        // return User::where('email',$request->input('email'))->get();
        
    }

    // reidrect to user dashboard
    public function dashboard()
    {   
        $user=auth()->user();
        $books=Book::all();
        $fav=favourite::select('bookId')->distinct()->where('userId','=',$user->id)->get();

        return view('home',compact('books','fav'));
    }

    // Logout user
    public function logout()
    {
        // Auth::logout();
        // auth->user()->tokens->delete();
        auth()->logout();
        return redirect('/login');
    }
    // Admin dashboard
    public function AdminDashboard()
    {   $book=Auth::user();
        // dd($book);
        return view('AdminDashboard',compact('book'));
    }
}
