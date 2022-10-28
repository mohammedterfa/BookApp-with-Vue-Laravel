<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return "list of index page";
    }

    public function create(){
        return view('book.create');
    }
}
