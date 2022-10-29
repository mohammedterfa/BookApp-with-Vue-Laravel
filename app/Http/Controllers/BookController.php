<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookStoreRequest;

class BookController extends Controller
{
    public function index(){
        $books = Book::get();
        return view('book.index',compact('books'));
    }

    public function create(){
        return view('book.create');
    }

    public function store(BookStoreRequest $request){


        Book::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'category'=>$request->category
        ]);

        return back()->with('message','New Book Added');
    }

    public function edit($id){
        $book = Book::find($id);
        return view('book.edit',compact('book'));
    }
}
