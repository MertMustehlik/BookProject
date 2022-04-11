<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SliderController extends Controller
{
    public function index(){
        $datas = Slider::get();
        return view('admin.include.slider.index', compact('datas'));
    }

    public function add(){
        return view('admin.include.slider.add');
    }   
    public function addPost(Request $request){
        $validated = $request->validate([
            "image" => 'required | image',
        ]);

        $imageFile = $request->image;

        if($imageFile){
            $imageName = uniqid().'.'.$imageFile->getClientOriginalExtension();
            $imageFile->move(public_path('admin/assets/img/slider/'),$imageName);
            
            $create = Slider::create([
                "image" => $imageName
            ]);
            
            if($create){
                return Redirect()->back()->with('status', 'Resim yüklendi.');
            }
            else{
                return Redirect()->back()->with('status', 'Resim yüklenemedi.');
            }
        }   
        else{
            return Redirect()->back()->with('status', 'Resim seçilmemiş.');
        }
    }

    public function update($id){
        $data = Slider::find($id);
        return view('admin.include.slider.update', compact(['data']));
    }
    public function updatePost($id, Request $request){
        $data = Slider::find($id);

        if($data){
            $validated = $request->validate([
                "image" => 'required | image',
            ]);
    
            $imageFile = $request->image;
    
            if($imageFile){
                unlink(public_path('admin/assets/img/slider/').$data->image);
                $imageName = uniqid().'.'.$imageFile->getClientOriginalExtension();
                $imageFile->move(public_path('admin/assets/img/slider/'),$imageName);
                
                $update = Slider::whereId($id)->update([
                    "image" => $imageName
                ]);
                
                if($update){
                    return Redirect()->back()->with('status', 'Resim güncellendi.');
                }
                else{
                    return Redirect()->back()->with('status', 'Resim güncellenemedi.');
                }
            }   
            else{
                return Redirect()->back()->with('status', 'Resim seçilmemiş.');
            }
        }
        else{
            return Redirect('/');
        }
    }

    public function delete($id){
        $data = Slider::find($id);

        if($data){
            $delete = Slider::whereId($id)->delete();

            if($delete){
                return Redirect()->back()->with('status', 'Resim silindi.');
            }
            else{
                return Redirect()->back()->with('status', 'Resim silinemedi.');
            }
        }
        else{
            return Redirect('/');
        }
    }
}
