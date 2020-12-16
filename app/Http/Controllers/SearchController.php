<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\Models\Books;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $q = trim($request->get('q'));
        $books = Books::query()
            ->where('book_name', 'like', "%{$q}%")
            ->orWhere('isbn', 'like', "%{$q}%")
            ->paginate(3);

        return view('searchresults', ['books' => $books]);

    }
}
