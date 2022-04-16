<?php

namespace App\Http\Controllers\Front\Search;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    function __construct()
    {
        view()->share('categories',\App\Models\Category::get());
    }

    public function index(Request $request){
        $books = Book::where('name','like','%'.$request->search.'%')->get();
        $authors = Author::get();
        return view('front.include.search.index', compact(['books', 'authors']));
    }
}
