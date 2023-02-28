<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = false; //k tạo 2 trường ngày tạo và ngày cập nhật
    protected $fillable =[
        'brand_name', 'brand_desc', 'brand_status',
    ]; // những cột có thể chèn dữ liệu
    protected $primaryKey = 'brand_id';
    protected $table = 'tbl_brand';

}
