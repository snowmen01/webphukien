<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\XaPhuong;
use App\ThanhPho;
use App\QuanHuyen;
use App\Customer;
use App\Shipping;
use App\SubShipping;

session_start();

class CheckoutController extends Controller
{
    public function show_checkout()
    {
        $data [] = "";
        if(Session::get('customer_id')==true){
            $data = Customer::find(Session::get('customer_id'));
        }
        $thanhpho = ThanhPho::all();
        return view('pages.checkout')->with('thanhpho', $thanhpho)->with('data', $data);
    }

    public function donecart()
    {
        return view('pages.donecart');
    }

    public function selectdelivery(Request $rq){
        $data = $rq -> all();
        if($data['action']){
            $output = '';
            if($data['action'] == "city"){
                $output = '<option></option>';
                $select_province = QuanHuyen::where('matp', $data['maid'])->orderby('maqh', 'asc')->get();
                foreach($select_province as $key => $province){
                    $output .='<option value ="'.$province->maqh.'">'.$province->name_qh.'</option>';
                }
            }else{
                $select_wards = XaPhuong::where('maqh', $data['maid'])->orderby('xaid', 'asc')->get();
                $output = '<option></option>';
                foreach($select_wards as $key => $wards){
                    $output .='<option value ="'.$wards->xaid.'">'.$wards->name_xa.'</option>';
                }
            }
        }
        echo $output;
    }

    public function savecart(Request $rq)
    {
        $data = $rq -> all();

        $shipping = new Shipping();

        $shipping_code = 'KIP10000' . substr(md5(microtime()),rand(0,26),5);

        $wards = XaPhuong::find($data['wards']);
        $province = QuanHuyen::find($data['province']);
        $city = ThanhPho::find($data['city']);

        $shipping -> customer_id = Session::get('customer_id');
        $shipping -> shipping_name = Session::get('customer_name');
        $shipping -> shipping_address = $data['streetName'] . ', ' . $wards->name_xa . ', ' . $province->name_qh . ', ' . $city -> name_tp;
        $shipping -> shipping_phone = $data['telephone'];
        $shipping -> shipping_note = $data['notes'];
        $shipping -> shipping_total = $data['total'];
        $shipping -> shipping_code = $shipping_code;

        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $shipping -> date_order = now();

        $shipping -> shipping_status = 0;

        $result = $shipping -> save();

        if($result){

            foreach(Session::get('cart') as $key => $cart){
                $sub = new SubShipping();

                $sub -> product_name = $cart['product_name'];
                $sub -> product_qty = $cart['product_qty'];
                $sub -> product_price = $cart['product_price'];
                $sub -> shipping_code = $shipping_code;

                $sub -> save();

            }

            Session::put('shipping_code', $shipping_code);

            Session::forget('cart');

            return Redirect::to('/done-cart');
        }

    }
}
