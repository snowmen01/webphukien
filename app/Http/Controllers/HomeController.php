<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Brand;
use App\Slider;
use App\Category;

class HomeController extends Controller
{
    public function index(){
        $cate_product = Category::where('category_status', '1') -> get();
        $brand_product = Brand::where('brand_status', '1') -> get();
        $product = Product::orderBy('product_id','desc')->limit(8)-> get();
        $slider = Slider::where('slider_status', '1')->orderBy('slider_id','desc')->get();
        return view('pages.view')->with(compact('cate_product','brand_product','product', 'slider'));
    }
}
