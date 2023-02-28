<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Category;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
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
        return view('admin.category.addcategory');
    }

    public function all(){
        $this -> AuthLogin();
        $data = Category::orderBy('category_id', 'desc')->get();
        $manager = view('admin.category.allcategory')->with('data', $data);
        return view('admin.dashboard')->with('admin.category.allcategory', $manager);
    }

    public function save(Request $rq){
        $this -> AuthLogin();
        $data = $rq -> all();
        $cate = new Category();
        $cate -> category_name = $data['category_product_name'];
        $cate -> category_desc = $data['category_product_desc'];
        $cate -> category_status = $data['category_product_status'];
        $result = $cate -> save();
        if($result==True){
            Session::put('message','Thêm danh mục thành công!');
            return Redirect::to('/add-category-product');
        }else{
            Session::put('message', 'Thêm danh mục thất bại!');
            return Redirect::to('/add-category-product');
        }
    }

    public function update($id, Request $rq){
        $this -> AuthLogin();
        $data = $rq -> all();
        $cate = Category::find($id);
        $cate -> category_name = $data['category_product_name'];
        $cate -> category_desc = $data['category_product_desc'];
        $result = $cate -> save();
        if($result==True){
            return Redirect::to('/all-category-product');
        }else{
            Session::put('message', 'Cập nhật danh mục thất bại!');
        }
    }

    public function edit($id){
        $this -> AuthLogin();
        $data_edit = Category::find($id);
        $manager = view('admin.category.editcategory')->with('data', $data_edit);
        return view('admin.dashboard')->with('admin.category.editcategory', $manager);
    }

    public function delete($id){
        $this -> AuthLogin();
        Category::where('category_id',$id)->delete();
        return Redirect::to('/all-category-product');
    }

    public function active($id){
        $this -> AuthLogin();
        Category::where('category_id',$id)->update(['category_status'=> 1]);
        return Redirect::to('/all-category-product');
    }

    public function unactive($id){
        $this -> AuthLogin();
        Category::where('category_id',$id)->update(['category_status'=> 0]);
        return Redirect::to('/all-category-product');
    }
}
