<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $timestamps = false; //k tạo 2 trường ngày tạo và ngày cập nhật
    protected $fillable =[
        'admin_email', 'admin_password', 'admin_name', 'admin_phone',
    ]; // những cột có thể chèn dữ liệu
    protected $primaryKey = 'admin_id';
    protected $table = 'tbl_admin';
}
