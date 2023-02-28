<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $timestamps = false;
    protected $fillable =[
        'customer_id', 'shipping_name', 'shipping_address','shipping_phone',
        'shipping_note','shipping_total','shipping_code', 'date_order', 'shipping_status'
    ];
    protected $primaryKey = 'shipping_id';
    protected $table = 'tbl_shipping';
}
