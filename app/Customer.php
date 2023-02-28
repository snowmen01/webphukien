<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false; //k tạo 2 trường ngày tạo và ngày cập nhật
    protected $fillable =[
        'customer_name', 'customer_email', 'customer_password', 'customer_phone',
    ]; // những cột có thể chèn dữ liệu
    protected $primaryKey = 'customer_id';
    protected $table = 'tbl_customer';
}
