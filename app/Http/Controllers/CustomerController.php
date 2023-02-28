<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Customer;
use App\Shipping;
use App\Status;

session_start();

class CustomerController extends Controller
{
    public function CustomerAuth()
    {
        $customer_id = Session::get('customer_id');

        if($customer_id){
            return Redirect::to('/my-account');
        }else{
            return Redirect::to('/signin')->send();
        }
    }

    public function signin()
    {
        if(Session::get('customer_id')==true){
            return Redirect::to('/my-account');
        }else{
            return view('pages.signin');
        }
    }

    public function homemyaccount(){

        $this -> CustomerAuth();

        $sub = Shipping::join('tbl_subshipping','tbl_shipping.shipping_code','=','tbl_subshipping.shipping_code')
        -> where('customer_id', Session::get('customer_id'))->get();

        $data = Shipping::join('tbl_trangthai','tbl_shipping.shipping_status','=','tbl_trangthai.id_tt')
        -> where('customer_id', Session::get('customer_id'))->orderby('shipping_id', 'desc')->get();

        return view('pages.myaccount')->with('data', $data)->with('sub', $sub);
    }

    public function signup()
    {
        if(Session::get('customer_id')==true){
            return Redirect::to('/my-account');
        }else{
            return view('pages.signup');
        }
    }

    public function logout()
    {
        Session::put('customer_name',null);
        Session::put('customer_id',null);
        return Redirect::to('/');
    }

    public function checklogin(Request $rq)
    {
        $customer_email = $rq->email;
        $customer_password = $rq->pass;

        $result = Customer::where('customer_email','like', $customer_email)->orwhere('customer_phone', 'like', $customer_email)->where('customer_password', $customer_password)->first();
        if($result==True){
            Session::put('customer_name',$result->customer_name);
            Session::put('customer_id',$result->customer_id);
            return Redirect::to('/my-account');
        }else{
            Session::put('message', 'Sai tài khoản hoặc mật khẩu!');
            return Redirect::to('/signin');
        }
    }
}
