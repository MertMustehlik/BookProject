<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function index(){
        $datas = Order::get();
        return view('admin.include.order.index', compact('datas'));
    }

    public function detail($id){
        $data = Order::find($id);
        if($data){
            return view('admin.include.order.detail', compact('data'));
        }
        else{
            return Redirect('/');
        }
        
    }
}
