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
        $request->validate([
            'category_name'=>'required|unique:categories'
        ]);

        $category=Categorie::create($request->all());
        // $user = new Categorie();
        // $user->category_name = $request->category_name;
        
        
        // $user->save();
        return "Category added successfully into database";
    }
}
