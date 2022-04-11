<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $categories = Category::get();
        $authors = Author::get();
        $books = Book::get();
        $sliders = Slider::get();
        return view('front.include.index', compact(['categories', 'books', 'authors', 'sliders']));
    }
}
