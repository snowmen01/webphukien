<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Gallery;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Output\Output;

session_start();

class GalleryController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/admin')->send();
        }
    }

    public function add_gallery($id){
        $this -> AuthLogin();
        $pro_id = $id;
        return view('admin.gallery.addgallery')->with(compact('pro_id'));
    }

    public function insert_gallery(Request $rq, $id){
        $this -> AuthLogin();
        $get_image = $rq -> file('file');
        if($get_image){
            foreach($get_image as $file){
                $new_image = $file->getClientOriginalName();
                $name_image = current(explode('.', $new_image));
                $extension = $file->getClientOriginalExtension();
                $new_image = $name_image.'-'.str_random(3).".".$extension;
                $destinationPath = 'public/uploads/product'.'/';
                $file->move($destinationPath, $new_image);
                $gallery = new Gallery();
                $gallery -> gallery_name = $name_image;
                $gallery -> gallery_image = $new_image;
                $gallery -> product_id = $id;
                $gallery -> save();
            }
        }
        return Redirect()->back();
    }

    public function delete_gallery(Request $rq){
        $this -> AuthLogin();
        $gal_id = $rq -> gal_id;
        $gallery = Gallery::find($gal_id);
        $get_image = $rq -> file('file');
        unlink('public/uploads/product/'.$gallery->gallery_image);
        $gallery->delete();
    }

    public function select_gallery(Request $rq){
        $this -> AuthLogin();
        $product_id = $rq -> pro_id;
        $gallery = Gallery::where('product_id', $product_id)->get();
        $gallery_count = $gallery->count();
        $output = '
        <table class="table table-bordered">
        <thead>
          <tr>
            <th class="col-lg-1">#</th>
            <th class="col-lg-7">Tên hình ảnh</th>
            <th class="col-lg-2">Ảnh</th>
            <th class="col-lg-2">Tùy chọn</th>
          </tr>
        </thead>
        <tbody>';
        if($gallery_count>0){
            foreach($gallery as $key => $gal){
                $output.='
                <tr>
                <td>'.$gal->gallery_id.'</td>
                <td>'.$gal->gallery_name.'</td>
                <td><img src="'.url('/public/uploads/product/'.$gal->gallery_image).'"></td>
                <td>
                  <button type="button" data-gal_id="'.$gal->gallery_id.'" class="btn btn-outline-danger btn-fw delete-gallery">Xóa</button>
                </td>
                </tr>
                ';
            }
            $output.='</tbody>';
        }else{
            $output.='
                <tr>
                <td colspan="4">Sản phẩm chưa có thư viện ảnh</td>
                </tr>
                ';
        }
        echo $output;
    }

}
