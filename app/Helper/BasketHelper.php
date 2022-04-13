<?php

namespace App\Helper;

use Illuminate\Support\Facades\Session;

class BasketHelper{
    static function add($id, $name, $price, $image){
        $array = [
            "id" => $id,
            "name" => $name,
            "price" => $price,
            "image" => $image
        ];
        Session::put('basket.'. uniqid() , $array);
    }
    static function allList(){
        $x = Session::get('basket');
        return $x;
    }

    static function countData(){
        if(Session::get('basket')){
            return count(Session('basket'));
        }
    }

    static function totalPrice(){
        $data = self::allList();
        return collect($data)->sum('price');
    }

    static function delete($id){
        Session::forget(['basket.'. $id]);
    }
}