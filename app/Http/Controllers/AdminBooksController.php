<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Book;
use  App\Models\Categorie;

class AdminBooksController extends Controller
{
    public function add_books()
    {
        $cat=Categorie::all();
        return view('Admin.Books',compact('cat'));

    }
    public function store(Request $request)
    {   
        // Book::create($request->all());
        // dd($request->all());
        $request->validate([
            'book_name'=>'required|unique:books'
        ]);
        $user=new Book();
        $user->book_name=$request->book_name;
        $user->author_name=$request->author_name;
        $user->publisher=$request->publisher;
        $user->description=$request->description;
        
         
            // $file=$request->file('book_image');
            // $extension=$file->getClientOriginalExtension();
            // $filename=time().'.'.$extension;
            // $file->store('uploads/books/',$filename);

        
        if($request->hasFile('book_image')){
            $request->book_image->store('uploads/books', 'public');
            $user->book_image = $request->book_image->hashName();
        }
        $user->pages=$request->pages;
        $user->category=$request->category;
       

        if($request->hasFile('book_file')){
            $request->book_file->store('uploads/books_pdf', 'public');
            $user->book_file = $request->book_file->hashName();
        }
        
        
        $user->save();

        return "Successfully added the book into database";
    }
   
     public function showBooks()
    {
        $books=Book::orderBy('id','DESC')->get();
        return view('book_details',compact('books'));
    }
    public function delete($id){
     
        $data=Book::find($id);
        $data->delete();
        $books=Book::orderBy('id','DESC')->get();
        
        return view('book_details',compact('books'));
    }
    public function edit($id){
        $book = Book::find($id);
        $cat=Categorie::all();
        return view('Admin.edit_book', compact('book','cat'));
    }

    public function update(Request $request,$id){
        // $validate = $request->validate([
        //     'name' => "required|unique:posts|max:20",
            
        // ]);
        
        
        // $post = Post::find($id);
        
       $b=Book::find($id);

       $b->update([

        'book_name'=>$request->book_name,
        'author_name'=>$request->author_name,
        'publisher'=>$request->publisher,
        'description'=>$request->description,
        'pages'=>$request->pages,
        'category'=>$request->category,
        
    ]);
       
      // dd($user);
      $books=Book::orderBy('id','DESC')->get();
        return view('book_details',compact('books'));
    }
}
