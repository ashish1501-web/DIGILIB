<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
class AdminUsersController extends Controller
{
    public function showUsers()
    {   
        $student=User::orderBy('id','DESC')->get();
        return view('Admin.user_details',compact('student'));
    }

    public function edit($id){
        $user = User::find($id);
        // dd($user);
        return view('Admin.edit_users', compact('user'));
    }

    public function update(Request $request,$id){
        // $validate = $request->validate([
        //     'name' => "required|unique:posts|max:20",
            
        // ]);
        
        // $post = Post::find($id);
        $request->validate([
            'userName' => 'max:20',
           
            
        ]);
        
       $user=User::find($id);

       $user->update([
            'userName'=>$request->userName,
            'email'=>$request->email,
            'phoneNumber'=>$request->phoneNumber,
       ]);
       
      // dd($user);
      $student=User::all();
        return view('Admin.user_details',compact('student'));
    }
    public function delete($id){
     
        $data=User::find($id);
        $data->delete();
        $student=User::all();
        
        return view('Admin.user_details',compact('student'));
    }
}
