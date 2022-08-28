<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs=Blog::all();
        return view('blog',compact('blogs'));
    }
    public function show()
    {
        return view('blogPost');
    }
}
