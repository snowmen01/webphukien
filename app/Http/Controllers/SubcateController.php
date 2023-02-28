<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class SubcateController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/admin')->send();
        }
    }

    public function all($id){
        $this -> AuthLogin();
        $data = DB::table('tbl_subcategory_product') -> where('category_id', $id)-> get();
        $manager = view('admin.subcategory.viewsub') -> with('data', $data);
        return view('admin.dashboard')->with('admin.subcategory.viewsub', $manager);
    }
}
