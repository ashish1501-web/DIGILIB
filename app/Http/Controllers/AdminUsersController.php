<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
class AdminUsersController extends Controller
{
    public function showUsers()
    {   
        $student=User::all();
        return view('Admin.user_details',compact('student'));
    }
}
