<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Product;

session_start();

class CartController extends Controller
{
    public function cart(){
        return view('pages.viewcart');
    }

    public function add_ajax(Request $rq){
        $data = $rq->all();
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        $dt = Product::find($data['cart_product_id']);
        $product_id = $dt->product_id;
        $product_name= $dt->product_name;
        $product_image = $dt->product_image;
        $product_price = $dt->product_price;
        $product_qty = $data['cart_product_qty'];
        // kiểm tra đã tồn tại hàng trong giỏ chưa
        if($cart==true){
            $is_avaiable = 0;
            foreach($cart as $key => $val){
                if($val['product_id']==$product_id){
                    $is_avaiable++;
                }
            }
            Session::put('cart',$cart);
            if($is_avaiable == 0){
                $cart[$product_id] = array(
                    'session_id' => $session_id,
                    'product_name' => $product_name,
                    'product_id' => $product_id,
                    'product_image' => $product_image,
                    'product_qty' => $product_qty,
                    'product_price' => $product_price,
    
                );
            }else if($is_avaiable != 0){
                $cart[$product_id]['product_qty']++;
            }
        }else{
            $cart[$product_id] = array(
                'session_id' => $session_id,
                'product_name' => $product_name,
                'product_id' => $product_id,
                'product_image' => $product_image,
                'product_qty' => $product_qty,
                'product_price' => $product_price,

            );
        }
        Session::put('cart',$cart);
        Session::save();
    }    

    public function show_cart(){
        return Redirect::to('/shopcart');
    }

    public function delete_cart($id){
        $cart = Session::get('cart');
        unset($cart[$id]);
        Session::put('cart', $cart);
        if(count($cart)==0){
            Session::forget('cart');
        }
        return Redirect::to('/show-cart');
    }

    public function update_qty(Request $rq){
        $data = $rq->all();
        $id = $data['product_id'];
        $qty = $data['quantity'];
        $cart = Session::get('cart');

        if($cart)
        {
            $is_avaiable = 0;
            foreach($cart as $key => $val){
                if($val['product_id']==$id){
                    $is_avaiable++;
                }
            }
            if($is_avaiable!=0){
                $cart[$id]['product_qty'] = $qty;
            }
            Session::put('cart', $cart);
            return response()->json();
        }
    }

}
