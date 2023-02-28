<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Brand;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;

class BrandProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/admin')->send();
        }
    }
    
    public function add(){
        $this -> AuthLogin();
        return view('admin.brand.addbrand');
    }

    public function all(){
        $this -> AuthLogin();
        $data = Brand::orderBy('brand_id','desc')->get();
        $manager = view('admin.brand.allbrand')->with('data', $data);
        return view('admin.dashboard')->with('admin.brand.allbrand', $manager);
    }

    public function save(Request $rq){
        $this -> AuthLogin();
        $data = $rq->all();
        $brand = new Brand();
        $brand -> brand_name  = $data['brand_product_name'];
        $brand -> brand_desc  = $data['brand_product_desc'];
        $brand -> brand_status  = $data['brand_product_status'];
        $result = $brand -> save();
        if($result==True){
            Session::put('message','Thêm thương hiệu thành công!');
            return Redirect::to('/all-brand-product');
        }else{
            Session::put('message', 'Thêm thương hiệu thất bại!');
            return Redirect::to('/all-brand-product');
        }
    }

    public function update($id, Request $rq){
        $this -> AuthLogin();
        $data = $rq->all();
        $brand = Brand::find($id);
        $brand -> brand_name  = $data['brand_product_name'];
        $brand -> brand_desc  = $data['brand_product_desc'];
        $result = $brand -> save();
        if($result==True){
            return Redirect::to('/all-brand-product');
        }else{
        }
    }

    public function edit($id){
        $this -> AuthLogin();
        $data_edit = Brand::find($id);
        $manager = view('admin.brand.editbrand')->with('data', $data_edit);
        return view('admin.dashboard')->with('admin.brand.editbrand', $manager);
    }

    public function delete($id){
        $this -> AuthLogin();
        Brand::where('brand_id', $id)->delete();
        return Redirect::to('/all-brand-product');
    }

    public function active($id){
        $this -> AuthLogin();
        Brand::find($id)->update(['brand_status'=>1]);
        return Redirect::to('/all-brand-product');
    }

    public function unactive($id){
        $this -> AuthLogin();
        Brand::find($id)->update(['brand_status'=>0]);
        return Redirect::to('/all-brand-product');
    }
}
