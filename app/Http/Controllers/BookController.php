<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index (){
        $books = Book::paginate(10);
        return  view("books.books") -> with("books", $books) ;
    }

    public function show ($id){
        $book = Book::find($id);
        return  view("books.show") -> with("book", $book) ;
    }

    public function create (){
        return  view("books.create") ;
    }
    public function store (Request $request){
        //dd($request->all());
        //return  view("books.create") ;

        $roles=[
            'title' => 'required|max:255',
            'author' => 'required',
            'isbn' => 'required|max:13',
            'stock' => 'required|numeric|integer',
            'price' => 'required|numeric',
        ];
         $request->validate($roles);
        Book::create($request->all());
        return redirect()->route("books.index");
    }
}
