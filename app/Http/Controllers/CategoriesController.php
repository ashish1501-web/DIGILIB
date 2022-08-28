<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Categorie;
use App\Models\reviews;
use App\Models\favourite;

class CategoriesController extends Controller
{
    public function index()
    {   
        $examples=Book::all();
        $cat=Categorie::all();
        return view('categories',compact('examples','cat'));
    }

    public function show($id)
    {
        $book=Book::find($id);
        $b2=Book::all();
        $comments=reviews::all();
        // dd($comments);
        return view('show_book',compact('book','b2','comments'));
    }

    public function store(Request $request)
    {
        
        // // $user = new reviews();
        // // $user->comment = $request->comment;
        
        
      

        if($request->submit=='2'){
            reviews::create($request->all());
            return redirect()->route('book.show',['id'=>$request->bookId]);
        }
        else{
            $request->validate([
                'bookId'=>'unique:favourites,bookId,NULL,userId,Auth::user()->id',
            ]);
            $fav=favourite::create($request->all());
            return redirect()->route('book.show',['id'=>$request->bookId]);
        }
    }
   
   
}
