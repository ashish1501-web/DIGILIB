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
        $request->validate([
            'blog_name' => 'required|unique:blogs',
            'date'=>'required',
        'blog_details'=>'required',
        'blog_video_link'=>'required',
            
        ]);
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
            $user->blog_image = $request->blog_image->hashName();
        }
        $user->blog_video_link=$request->blog_video_link;

       

        
        $user->save();

        return "Successfully added the blog into database";;
    }
    public function showBlogs()
    {
        $blogs=Blog::orderBy('id','DESC')->get();
        return view('Admin.blog_details',compact('blogs'));
    }
    public function delete($id){
     
        $data=Blog::find($id);
        $data->delete();
        $blogs=Blog::all();
        
        return view('Admin.blog_details',compact('blogs'));
    }
    public function edit($id){
        $blog = Blog::find($id);
        // $cat=Categorie::all();
        // dd($user);
        return view('Admin.edit_blog', compact('blog'));
    }

    public function update(Request $request,$id){
        // $validate = $request->validate([
        //     'name' => "required|unique:posts|max:20",
            
        // ]);
        
        
        // $post = Post::find($id);
        
       $b=Blog::find($id);

       $b->update([

        'blog_name'=>$request->blog_name,
        'date'=>$request->date,
        'blog_details'=>$request->blog_details,
        'blog_video_link'=>$request->blog_video_link,
        
    ]);
       
      // dd($user);
      $blogs=Blog::all();
        return view('Admin.blog_details',compact('blogs'));
    }
}
