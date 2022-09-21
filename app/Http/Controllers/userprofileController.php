<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use  App\Models\User;
use  App\Models\favourite;
class userprofileController extends Controller
{
    public function index()
    {   
      $user=auth()->user();
     
        $fav=DB::table('favourites')->select('bookId')->distinct()->where('userId','=',$user->id)->get();
        // return $fav;
        $books=DB::table('books')->get();
    // $users = DB::table('users')
    //             ->where('votes', '>=', 100)
    //             ->get();
        return view('user_profile',compact('fav','books'));
    }
    public function edit(){
        $user=auth()->user();
        return view('edit_userProfile',compact('user'));
    }

    public function update(Request $request){
        
       $user=auth()->user();

       $user->update([
            'userName'=>$request->userName,
            'email'=>$request->email,
            'phoneNumber'=>$request->phoneNumber,
       ]);
       $fav=DB::table('favourites')->select('bookId')->distinct()->where('userId','=',$user->id)->get();
        // return $fav;
        $books=DB::table('books')->get();
      
        return view('user_profile',compact('fav','books'));
    }
}
