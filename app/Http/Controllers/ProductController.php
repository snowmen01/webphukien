<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Gallery;
use App\Product;
use App\Category;
use App\Brand;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/dashboard');
        }else{ 
            return Redirect::to('/admin')->send();
        }
    }

    public function getAlldata(){
        $data = Product::join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
                      -> join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->get();
        return response()->json($data, 200);
    }

    public function findProduct($id){
        $data= Product::find($id);
        return response()->json($data, 200);
    }

    public function addnewProduct(Request $rq)
    {
        $product = Product::create($rq->all());
        return response()->json($product, 200);
    }

    public function updateProduct(Request $rq, $id){
        $product = Product::where('product_id', $id)->update($rq->all());
        return response()->json($product, 200);
    }

    public function delProduct($id){
        $product = Product::where('product_id', $id)->delete();
        return response()->json($product, 200);
    }

    public function add(){
        $this -> AuthLogin();
        $cate_product = Category::all();
        $brand_product = Brand::all();
        return view('admin.product.addproduct')->with('cate_product', $cate_product)->with('brand_product', $brand_product);
    }

    public function all(){
        $this -> AuthLogin();
        $client = new Client([
            'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json'],
        ]);
        $response = $client->request('GET','http://localhost/webphukien/api/product');
        $data = $response -> getBody();
        
        $data = json_decode($data);
        // $data = Product::join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        //               -> join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->get();
        $manager = view('admin.product.allproduct')->with('data', $data);
        return view('admin.dashboard')->with('admin.product.allproduct', $manager);
    }

    public function save(Request $rq){
        $this -> AuthLogin();
        $data = $rq -> all();
        $product = new Product();
        $product -> product_name = $data['product_name'];
        $product -> product_price = $data['product_price'];
        $product -> product_desc = $data['product_desc'];
        $product -> product_content= $data['product_content'];
        $product -> product_size = $data['product_size'];
        $product -> product_color = $data['product_color'];
        $product -> brand_id = $data['brand_id'];
        $product -> category_id = $data['category'];
        $get_image = $rq -> file('product_image');

        if($get_image){
            foreach($get_image as $file){
                $new_image = $file->getClientOriginalName();
                $name_image = current(explode('.', $new_image));
                $extension = $file->getClientOriginalExtension();
                $new_image = $name_image.'-'.str_random(3).".".$extension;
                $destinationPath = 'public/uploads/product'.'/';
                $file->move($destinationPath, $new_image);
            }
            $product -> product_image = $new_image;
        }
        $result = $product->save();
        $result = $product->product_id;
        if($result>0){
            $gallery = new Gallery();
            $gallery->gallery_image = $new_image;
            $gallery->gallery_name = $name_image;
            $gallery->product_id = $result;
            $gallery->save();
            Session::put('message','Thêm sản phẩm thành công!');
            return Redirect::to('/add-product');
        }
    }

    public function update($id, Request $rq){

        $this -> AuthLogin();

        $data = $rq -> all();

        $product = Product::find($id);

        $product -> product_name = $data['product_name'];
        $product -> product_price = $data['product_price'];
        $product -> product_desc = $data['product_desc'];
        $product -> product_content= $data['product_content'];
        $product -> product_size = $data['product_size'];
        $product -> product_color = $data['product_color'];
        $product -> brand_id = $data['brand'];
        $product -> category_id = $data['category'];

        $get_image = $rq -> file('product_image');

        if($get_image){
            foreach($get_image as $file){
                $new_image = $file->getClientOriginalName();
                $name_image = current(explode('.', $new_image));
                $extension = $file->getClientOriginalExtension();
                $new_image = $name_image.'-'.str_random(3).".".$extension;
                $destinationPath = 'public/uploads/product'.'/';
                $file->move($destinationPath, $new_image);
            }
            $product -> product_image = $new_image;
            $result = $product -> save();
            if($result==True){
                return Redirect::to('/all-product');
            }else{
                return Redirect::to('/all-product');
            }
        }
        $result = $product -> save();
        return Redirect::to('/all-product');
    }

    public function edit($id){
        $this -> AuthLogin();
        $data_edit = Product::find($id);
        $cate_edit = Category::all();
        $brand_edit = Brand::all();
        $manager = view('admin.product.editproduct')->with('data', $data_edit)->with('cate', $cate_edit)->with('brand', $brand_edit);
        return view('admin.dashboard')->with('admin.product.editproduct', $manager);
    }

    public function delete($id){
        $this -> AuthLogin();
        Product::where('product_id', $id)->delete();
        return Redirect::to('/all-product');
    }

    public function details_view($id, Request $rq){
        
        $cate_product = Category::orderBy('category_id', 'desc')->get();
        $brand_product = Brand::orderBy('brand_id', 'desc')->get();
        $data = Product::join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        -> join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        -> where('tbl_product.product_id', $id)->get();

        foreach($data as $key => $value){
            $cate_id = $value -> category_id;
            $product_id = $value -> product_id;
            //seo
            $url_canonical = $rq -> url();
            //--seo
        }

        //gallery
        $gallery = Gallery::where('product_id', $product_id)->get();
        
        // san pham lien quan
        $data_related = Product::join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        -> join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        -> where('tbl_product.category_id', $cate_id)
        -> whereNotIn('tbl_product.product_id', [$id])
        -> orderBy('product_id','desc')->get();

        return view('pages.viewproduct')
        ->with('cate', $cate_product)
        ->with('brand', $brand_product)
        ->with('data', $data)
        ->with('related', $data_related)
        ->with('gallery', $gallery);
    }
}
