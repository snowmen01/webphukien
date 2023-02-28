<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false; //k tạo 2 trường ngày tạo và ngày cập nhật
    protected $fillable =[
        'category_name', 'category_desc', 'category_status',
    ]; // những cột có thể chèn dữ liệu
    protected $primaryKey = 'category_id';
    protected $table = 'tbl_category_product';
}
