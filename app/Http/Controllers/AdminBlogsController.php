<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Blog;
class AdminBlogsController extends Controller
{
    public function add_blogs()
    {
        return view('Admin.add_blogs');
    }

    public function store(Request $request)
    {   
        // Blog::create($request->all());
        // dd($request->all());
        $user=new Blog();
        $user->blog_name=$request->blog_name;
        $user->date=$request->date;
        $user->blog_details=$request->blog_details;
        
         
            // $file=$request->file('book_image');
            // $extension=$file->getClientOriginalExtension();
            // $filename=time().'.'.$extension;
            // $file->store('uploads/books/',$filename);

        
        if($request->hasFile('blog_image')){
            $request->blog_image->store('uploads/blogimages', 'public');
            $user->blog_image = $request->blog_image;
        }
        $user->blog_video_link=$request->blog_video_link;

       

        
        $user->save();

        return $user;
    }
    public function showBlogs()
    {
        $blogs=Blog::all();
        return view('Admin.blog_details',compact('blogs'));
    }
}
