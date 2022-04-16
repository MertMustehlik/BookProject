<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index(){
        $categories = Category::get();
        $authors = Author::get();
        $books = Book::get();
        $sliders = Slider::get();
        return view('front.include.index', compact(['categories', 'books', 'authors', 'sliders']));
    }

    public function emptyCard(){
        if(Session::has('basket')){
            Session::forget('basket');
        }
        return Redirect()->back();
    }
}
