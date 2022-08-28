<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Categorie;
class AdminCatController extends Controller
{
    public function add_categories()
    {
        return view('Admin.add_categories');
    }
    public function store(Request $request)
    {   
        $category=Categorie::create($request->all());
        // $user = new Categorie();
        // $user->category_name = $request->category_name;
        
        
        // $user->save();
        return $category;
    }
}
