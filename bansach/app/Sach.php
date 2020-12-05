<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sach extends Model
{
    use SoftDeletes;
    protected $guarded=[];
    public function images(){
        return $this->hasMany(ProductImage::class,'product_id');
    }

    public function theloai(){
        return $this->belongsTo(TheLoai::class,'ma_the_loai');
    }
}
