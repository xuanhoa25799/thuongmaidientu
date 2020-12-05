<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TheLoai extends Model
{
    use SoftDeletes;
    protected $fillable = ['tentheloai', 'parent_id', 'slug'];
}
