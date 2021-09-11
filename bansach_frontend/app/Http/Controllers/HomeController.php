<?php

namespace App\Http\Controllers;

use App\Slider;
use App\TheLoai;
use App\Sach;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $Theloais = TheLoai::where('parent_id',0)->get();
        $saches = Sach::orderByDesc('gia')->take(6)->get();
        $sachesNew = Sach::latest()->take(6)->get();
        return view('home.home', compact('sliders','Theloais' , 'saches', 'sachesNew'));
    }
}
