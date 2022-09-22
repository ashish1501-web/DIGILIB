<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Categorie;
use App\Models\review;
use App\Models\User;
use App\Models\favourite;

class CategoriesController extends Controller
{
    public function index()
    {   
        $examples=Book::orderBy('id','DESC')->get();
         
        $cat=Categorie::all();
        return view('categories',compact('examples','cat'));
    }

    public function show($id)
    {
        $book=Book::find($id);
        $b2=Book::all();
        $comments=review::orderBy('id','DESC')->get();
        $users=User::all();
        // dd($comments);
        return view('show_book',compact('book','b2','comments','users'));
    }

    public function store(Request $request)
    {
        
        // // $user = new reviews();
        // // $user->comment = $request->comment;
        
        
      
        // dd($request->comment);
        if($request->submit=='2'){
            review::create($request->all());
            return redirect()->route('book.show',['id'=>$request->bookId]);
        }
        else{
            $request->validate([
                'userId'=>'required',
                'bookId'=>['required',
                Rule::unique('favourites')->where(function ($query) use ($request) {

                    return $query
                        ->where('bookId',$request->bookId)
                        ->where('userId',$request->userId);
                }),
            ],
            ]);
            
               
            $fav=favourite::create($request->all());
            return redirect()->route('book.show',['id'=>$request->bookId])->with("Successfully added");
        }
    }
   
   
}
