<?php

namespace App\Http\Controllers\Front\Basket;

use App\Helper\BasketHelper;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;

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

    public function complate(){
        return view('front.include.basket.complate');
    }

    public function complatePost(Request $request){
        $validate = $request->validate([
            "phone" => "required",
            "address" => "required | email",
        ]);

        $create = Order::create([
            "userId" => Auth::id(),
            "phone" => $request->phone,
            "address" => $request->address,
            "message" => $request->message,
            "json" => json_encode(BasketHelper::allList())
        ]);

        if($create){
            FacadesSession::forget('basket');
            return Redirect()->back()->with('status','işlem başarılı');
        }
        else{
            return Redirect()->back()->with('status','bir sorun oluştu.');
        }
    }
}
