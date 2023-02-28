<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class SliderController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/admin')->send();
        }
    }

    public function all(){
        $this -> AuthLogin();
        $data = DB::table('tbl_slider')->orderByDesc('slider_id')->get();
        return view('admin.slider.allslider')->with('data', $data);
    }

    public function add(){
        $this -> AuthLogin();
        return view ('admin.slider.addslider');
    }

    public function insert(Request $rq){
        $this -> AuthLogin();
        $data = array();
        $data['slider_name'] = $rq->slider_name;
        $data['slider_desc'] = $rq->slider_desc;
        $data['slider_status'] = $rq->slider_status;
        $get_image = $rq -> file('slider_image');

        if($get_image){
            foreach($get_image as $file){
                $new_image = $file->getClientOriginalName();
                $name_image = current(explode('.', $new_image));
                $extension = $file->getClientOriginalExtension();
                $new_image = $name_image.'-'.str_random(3).".".$extension;
                $destinationPath = 'public/uploads/slider'.'/';
                $file->move($destinationPath, $new_image);
            }
            $data['slider_image'] = $new_image;
        }
        $result = DB::table('tbl_slider') -> insert($data);
        if($result>0){
            Session::put('message','Thêm slider thành công!');
            return Redirect::to('/add-slider');
        }
        return view ('admin.slider.addslider');
    }

    public function active($id){
        $this -> AuthLogin();
        DB::table('tbl_slider')->where('slider_id', $id)->update(['slider_status'=>1]);
        return Redirect::to('/all-slider');
    }

    public function unactive($id){
        $this -> AuthLogin();
        DB::table('tbl_slider')->where('slider_id', $id)->update(['slider_status'=>0]);
        return Redirect::to('/all-slider');
    }

    public function delete($id){
        $this -> AuthLogin();
        DB::table('tbl_slider')->where('slider_id', $id)->delete();
        return Redirect::to('/all-slider');
    }

}
