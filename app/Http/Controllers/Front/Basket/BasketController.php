<?php

namespace App\Http\Controllers\Front\Basket;

use App\Helper\BasketHelper;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BasketController extends Controller
{
    function __construct()
    {
        view()->share('categories',Category::get());
    }

    public function index(){
        return view('front.include.basket.index');
    }
    public function add($id){
        $data = Book::find($id);
        if($data){
            BasketHelper::add($id, $data->name, $data->price, $data->image);
            return Redirect()->back()->with('status','Sepete eklendi.');
        }
        else{
            return Redirect('/');
        }
    }

    public function delete($id){
        BasketHelper::delete($id);
        return Redirect()->back()->with('status','silindi');

    }
}
