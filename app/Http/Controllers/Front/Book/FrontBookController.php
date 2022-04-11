<?php

namespace App\Http\Controllers\Front\Book;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FrontBookController extends Controller
{   
    function __construct()
    {
        view()->share('categories',Category::get());
    }

    public function index($seflink){
        $book = Book::whereSeflink($seflink)->first();
        $authors = Author::get();
        $publishers = Publisher::get();

        if($book){
            return view('front.include.book.index', compact(['book', 'authors', 'publishers']));
        }
        else{
            return Redirect('/');
        }
    }
}
