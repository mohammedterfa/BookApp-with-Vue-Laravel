<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::get();
        return view('book.index',compact('books'));
    }

    public function create(){
        return view('book.create');
    }
}
