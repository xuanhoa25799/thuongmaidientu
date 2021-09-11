<?php

namespace App\Http\Controllers;

use App\Sach;
use Illuminate\Http\Request;
use App\TheLoai;

class TheLoaiController extends Controller
{
    public function index($slug, $id_theloai)
    {
        $Theloais = TheLoai::where('parent_id',0)->get();
        $saches= Sach::where('ma_the_loai',$id_theloai)->paginate(9);
        $theloaiSach = TheLoai::where('id',$id_theloai)->first();
        return view('sach.theloai.list',compact('Theloais','saches' ,'theloaiSach'));
    }
}
