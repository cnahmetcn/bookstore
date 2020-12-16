<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Category;

class BooksController extends Controller
{
    public function index()
    {
        $books=Books::with(['category','writer','publisher'])->paginate(5);
        $categories=Category::all();
        return view('index',compact('books','categories'));
    }


}
