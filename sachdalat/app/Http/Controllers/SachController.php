<?php

namespace App\Http\Controllers;

use App\Sach;
use App\TheLoai;
use Illuminate\Http\Request;

class SachController extends Controller
{
    public function index($slug, $id_sach)
    {
        $Theloais = TheLoai::where('parent_id',0)->get();
        $sach= Sach::where('id',$id_sach)->first();
        return view('sach.info',compact('Theloais','sach'));
    }
}
