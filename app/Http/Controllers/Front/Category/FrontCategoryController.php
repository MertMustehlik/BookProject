<?php

namespace App\Http\Controllers\Front\Category;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FrontCategoryController extends Controller
{
    function __construct()
    {
        view()->share('categories', Category::get());
    }

    public function index($seflink){
        $categories = Category::whereSeflink($seflink)->first();
        if($categories){
            $books = Book::where('categoryId',$categories->id)->get();
            $authors = Author::get();
            return view('front.include.category.index', compact(['books','authors']));
        }
        else{
            return Redirect('/');
        }
    }
}
