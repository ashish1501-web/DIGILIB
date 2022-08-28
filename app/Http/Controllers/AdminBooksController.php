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
            $user->book_image = $request->book_image;
        }
        $user->pages=$request->pages;
        $user->category=$request->category;
       

        if($request->hasFile('book_file')){
            $request->book_file->store('uploads/books_pdf', 'public');
            $user->book_file = $request->book_file;
        }
        
        
        $user->save();

        return $user;
    }
   
     public function showBooks()
    {
        $books=Book::all();
        return view('book_details',compact('books'));
    }
}
