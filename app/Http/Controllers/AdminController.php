<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Admin;

session_start();

class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/admin')->send();
        }
    }

    public function index(){
        return view('login_admin');
    }

    public function show_dashboard(){
        $this->AuthLogin();
        return view('admin.dashboard');
    }

    public function dashboard(Request $rq){
        $admin_email = $rq->admin_email;
        $admin_password = md5($rq->admin_password);
        $result = Admin::where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if($result==True){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message', 'Sai tài khoản hoặc mật khẩu!');
            return Redirect::to('/admin');
        }
    }
    
    public function logout(){
        $this->AuthLogin();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}
