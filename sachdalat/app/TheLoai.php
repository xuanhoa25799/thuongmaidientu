<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TheLoai extends Model
{
    use SoftDeletes;
    protected $table='the_loais';

    public function TheLoaiChildren()
    {
        return $this->hasMany(TheLoai::class, 'parent_id');
    }
}
