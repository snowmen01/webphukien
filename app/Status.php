<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamps = false;
    protected $fillable =[
        'ten_tt'
    ];
    protected $primaryKey = 'id_tt';
    protected $table = 'tbl_trangthai';
}
