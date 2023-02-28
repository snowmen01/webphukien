<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubShipping extends Model
{
    public $timestamps = false;
    protected $fillable =[
        'product_name', 'product_qty','product_price','shipping_code'
    ];
    protected $primaryKey = 'shipping_id';
    protected $table = 'tbl_subshipping';
}
