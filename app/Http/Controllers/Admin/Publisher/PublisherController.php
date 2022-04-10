<?php

namespace App\Http\Controllers\Admin\Publisher;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PublisherController extends Controller
{
    public function index(){
        $datas = Publisher::get();
        return view('admin.include.publisher.index', compact('datas'));
    }

    public function add(){
        return view('admin.include.publisher.add');
    }
    public function addPost(Request $request){
        $valideted = $request->validate([
            "name" => "required",
        ]);

        $name = $request->name;
        $seflink = Str::of($name)->slug('');
        
        $create = Publisher::create([
            "name" => $name,
            "seflink" => $seflink
        ]);

        if($create){
            return Redirect()->back()->with('status','Yayinevi eklendi.');
        }
        else{
            return Redirect()->back()->with('status','Bir sorun oluştu! Yayinevi eklenemedi.');
        }
    }

    public function update($id){
        $data = Publisher::find($id);

        if($data){
            return view('admin.include.publisher.update', compact('data'));
        }
        else{
            return Redirect('/');
        }
    }

    public function updatePost($id, Request $request){
        $data = Publisher::find($id);

        if($data){
            $valideted = $request->validate([
                "name" => "required",
            ]);
    
            $name = $request->name;
            $seflink = Str::of($name)->slug('');
            
            $update = Publisher::whereId($id)->update([
                "name" => $name,
                "seflink" => $seflink
            ]);
    
            if($update){
                return Redirect()->back()->with('status','Yayinevi düzenlendi.');
            }
            else{
                return Redirect()->back()->with('status','Bir sorun oluştu! Yayinevi düzenlenemedi.');
            }
        }
        else{
            return Redirect('/');
        }
    }
    public function delete($id){
        $data = Publisher::find($id);

        if($data){
            $delete = Publisher::whereId($id)->delete();

            if($delete){
                return Redirect()->back()->with('status','Yayinevi silindi.');
            }
            else{
                return Redirect()->back()->with('status','Bir sorun oluştu! Yayinevi silinemedi.');
            }
        }
        else{
            return Redirect('/');
        }
    }
}
