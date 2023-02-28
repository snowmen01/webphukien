<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuanHuyen extends Model
{
    public $timestamps = false;
    protected $fillable =[
        'name_qh', 'type', 'matp'
    ];
    protected $primaryKey = 'maqh';
    protected $table = 'tbl_quanhuyen';
}
