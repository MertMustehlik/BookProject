<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $datas = Category::get();
        return view('admin.include.category.index', compact('datas'));
    }

    public function add(){
        return view('admin.include.category.add');
    }
    public function addPost(Request $request){
        $valideted = $request->validate([
            "name" => "required",
        ]);

        $name = $request->name;
        $seflink = Str::of($name)->slug('');
        
        $create = Category::create([
            "name" => $name,
            "seflink" => $seflink
        ]);

        if($create){
            return Redirect()->back()->with('status','Kategori eklendi.');
        }
        else{
            return Redirect()->back()->with('status','Bir sorun oluştu! Kategori eklenemedi.');
        }
    }

    public function update($id){
        $data = Category::find($id);

        if($data){
            return view('admin.include.category.update', compact('data'));
        }
        else{
            return Redirect('/');
        }
    }

    public function updatePost($id, Request $request){
        $data = Category::find($id);

        if($data){
            $valideted = $request->validate([
                "name" => "required",
            ]);
    
            $name = $request->name;
            $seflink = Str::of($name)->slug('');
            
            $update = Category::whereId($id)->update([
                "name" => $name,
                "seflink" => $seflink
            ]);
    
            if($update){
                return Redirect()->back()->with('status','Kategori düzenlendi.');
            }
            else{
                return Redirect()->back()->with('status','Bir sorun oluştu! Kategori düzenlenemedi.');
            }
        }
        else{
            return Redirect('/');
        }
    }
    public function delete($id){
        $data = Category::find($id);

        if($data){
            $delete = Category::whereId($id)->delete();

            if($delete){
                return Redirect()->back()->with('status','Kategori silindi.');
            }
            else{
                return Redirect()->back()->with('status','Bir sorun oluştu! Kategori silinemedi.');
            }
        }
        else{
            return Redirect('/');
        }
    }
}
