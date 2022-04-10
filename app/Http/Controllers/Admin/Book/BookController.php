<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index(){
        $datas = Book::get();
        $authors = Author::get();
        $publishers = Publisher::get();
        return view('admin.include.book.index', compact(['datas', 'authors', 'publishers']));
    }

    public function add(){
        $authors = Author::get();
        $publishers = Publisher::get();

        return view('admin.include.book.add', compact(['authors', 'publishers']));
    }
    public function addPost(Request $request){
        $validated = $request->validate([
            "name" => "required",
            "image" => "nullable | image",
            "price" => "nullable",
            "description" => "nullable",
        ]);

        $name = $request->name;
        $seflink = Str::of($name)->slug('');
        $imageFile = $request->image;

        if($imageFile){
            $imageName = uniqid().'.'.$imageFile->getClientOriginalExtension();
            $imageFile->move(public_path('admin/assets/img/books'),$imageName);
            
            $create = Book::create([
                "name" => $name,
                "seflink" => $seflink,
                "authorId" => $request->authorId,
                "publisherId" => $request->publisherId,
                "image" => $imageName,
                "price" => $request->price,
                "description" => $request->description
            ]);
        }
        else{
            $create = Book::create([
                "name" => $name,
                "seflink" => $seflink,
                "authorId" => $request->authorId,
                "publisherId" => $request->publisherId,
                "price" => $request->price,
                "description" => $request->description
            ]);
        }
        
        if($create){
            return Redirect()->back()->with('status','Kitap eklendi.');
        }
        else{
            return Redirect()->back()->with('status','Kitap eklenemedi!');
        }
    }

    public function update($id){
        $data = Book::find($id);
        $authors = Author::get();
        $publishers = Publisher::get();
        if($data){
        return view('admin.include.book.update', compact(['data', 'authors', 'publishers']));
        }
        else{
            return Redirect('/');
        }
    }
    public function updatePost($id, Request $request){
        $data = Book::find($id);

        if($data){
            $validated = $request->validate([
                "name" => "required",
                "image" => "nullable | image",
                "price" => "nullable",
                "description" => "nullable",
            ]);
    
            $name = $request->name;
            $seflink = Str::of($name)->slug('');
            $imageFile = $request->image;
    
            if($imageFile){
                if($data->image){
                    $file_path = public_path('admin/assets/img/books').$data->image;
                    unlink($file_path);
                }
                $imageName = uniqid().'.'.$imageFile->getClientOriginalExtension();
                $imageFile->move(public_path('admin/assets/img/books'),$imageName);
                
                $update = Book::whereId($id)->update([
                    "name" => $name,
                    "seflink" => $seflink,
                    "authorId" => $request->authorId,
                    "publisherId" => $request->publisherId,
                    "image" => $imageName,
                    "price" => $request->price,
                    "description" => $request->description
                ]);
            }
            else{
                $update = Book::whereId($id)->update([
                    "name" => $name,
                    "seflink" => $seflink,
                    "authorId" => $request->authorId,
                    "publisherId" => $request->publisherId,
                    "price" => $request->price,
                    "description" => $request->description
                ]);
            }
            
            if($update){
                return Redirect()->back()->with('status','Kitap düzenlendi.');
            }
            else{
                return Redirect()->back()->with('status','Kitap düzenlenemedi!');
            }
        }
        else{
            return Redirect('/');
        }
    }
    
    public function delete($id){
        $data = Book::find($id);

        if($data){
            if($data->image){
                unlink(public_path('admin/assets/img/books/').$data->image);
            }
            $delete = Book::whereId($id)->delete();

            if($data){
                return Redirect()->back()->with('status','Kitap silindi.');
            }
            else{
                return Redirect()->back()->with('status','Kitap silinemedi!');
            }
        }
        else{
            return Redirect('/');
        }
    }
}
