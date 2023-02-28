<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Admin;
use App\Shipping;
use App\SubShipping;

session_start();

class OrderController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/admin')->send();
        }
    }

    public function wait()
    {

        $this -> AuthLogin();

        $data = Shipping::join('tbl_trangthai', 'tbl_shipping.shipping_status', '=', 'tbl_trangthai.id_tt')
        ->where('shipping_status', 0)->orderby('shipping_id', 'desc')->get();

        return view('admin.order.waitorder')->with('data', $data);
    }

    public function all()
    {

        $this -> AuthLogin();

        $data = Shipping::join('tbl_trangthai', 'tbl_shipping.shipping_status', '=', 'tbl_trangthai.id_tt')
        ->where('shipping_status','>', 0)->orderby('shipping_id', 'desc')->get();

        return view('admin.order.allorder')->with('data', $data);
    }

    public function vieworder($id)
    {
        $this -> AuthLogin();

        $data1 = Shipping::where('shipping_code', $id)->get();

        $data = SubShipping::where('shipping_code', $id)->orderby('shipping_id', 'desc')->get();

        return view('admin.order.vieworderchitiet')->with('data', $data)->with('data1', $data1);
    }

    public function acceptorder($id)
    {
        $this -> AuthLogin();

        Shipping::find($id)->update(['shipping_status'=>1]);

        return Redirect::to('/all-order');
    }

}
