<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\RequestStack;

class AuthorController extends Controller
{
    public function index(){
        $datas = Author::all();
        return view('admin.include.authors.index', compact('datas'));
    }

    public function add(){
        return view('admin.include.authors.add');
    }
    public function addPost(Request $request){
        $validated = $request->validate([
            "name" => "required",
            "image" => "nullable | image",
            "description" => "nullable",
        ]);
        
        $name = $request->name;
        $seflink = Str::of($name)->slug('');
        $imageFile = $request->image;
    
        if($imageFile){
            $imageName = uniqid().".".$imageFile->getClientOriginalExtension();
            $imageFile->move(public_path('admin/assets/img/authors'),$imageName);

            $create = Author::create([
                "name" => $name,
                "seflink" => $seflink,
                "image" => $imageName,
                "bio" => $request->bio
            ]);
        }
        else{
            $create = Author::create([
                "name" => $name,
                "seflink" => $seflink,
                "bio" => $request->bio
            ]);
        }

        if($create){
            return Redirect()->back()->with('status','Yazar eklendi.');
        }
        else{
            return Redirect()->back()->with('status','Bir sorun oluştu! Yazar eklenemedi.');
        }
    }

    public function update($id){
        $data = Author::find($id);
        if($data){
            return view('admin.include.authors.update', compact('data'));
        }
        else{
            return Redirect('/');
        }
        
    }
    public function updatePost($id, Request $request){
        $validated = $request->validate([
            "name" => "required",
            "image" => "nullable | image",
            "description" => "nullable",
        ]);

        $name = $request->name;
        $seflink = Str::of($name)->slug('');
        $imageFile = $request->image;

        $data = Author::find($id);
        if($data){
            if($imageFile){
                if($data->image){
                    $file_path = public_path('admin/assets/img/authors/').$data->image;
                    unlink($file_path);
                }
                $imageName = uniqid().".".$imageFile->getClientOriginalExtension();
                $imageFile->move(public_path('admin/assets/img/authors'),$imageName);
    
                $update = Author::whereId($id)->update([
                    "name" => $name,
                    "seflink" => $seflink,
                    "image" => $imageName,
                    "bio" => $request->bio
                ]);
            }
            else{
                $update = Author::whereId($id)->update([
                    "name" => $name,
                    "seflink" => $seflink,
                    "bio" => $request->bio
                ]);
            }

            if($update){
                return Redirect()->back()->with('status','Yazar güncellendi.');
            }
            else{
                return Redirect()->back()->with('status','Bir sorun oluştu! Yazar güncellenemedi.');
            }
        }
        else{
            return Redirect('/');
        }
    }
    public function delete($id){
        $data = Author::find($id);

        if($data){
            if($data->image){
                unlink(public_path('admin/assets/img/authors/').$data->image);
            }
            $delete = Author::whereId($id)->delete();
            if($delete){
                return Redirect()->back()->with('status','Yazar silindi.');
            }
            else{
                return Redirect()->back()->with('status','Bir aksilik oluştu! Yazar silinemedi.');
            }
            
        }
        else{
            return Redirect('/');
        }
    }
}
