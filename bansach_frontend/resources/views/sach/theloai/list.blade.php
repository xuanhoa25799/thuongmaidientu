@php
    $baseUrl = 'http://127.0.0.1:8080';
@endphp
@extends('layouts.master')

@section('title')
    <title>{{$theloaiSach->tentheloai}} | Sách Đà Lạt</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('home/home.css')}}">
@endsection

@section('content')

    <div class="container" id="content">
        <div id="BestSeller" class="my-5">
            <h3 class="d-inline">{{$theloaiSach->tentheloai}}</h3>
            <hr>
            <div class="row">
                @foreach($saches as $sach)
                    <div class="col-3-5 mx-auto my-2 border border-secondary">
                        <img height="400px" width="310px" src="{{$baseUrl.$sach->feature_image_path}}">
                        <p class="h6">{{$sach->ten_sach}}</p>
                        <p class="h6">Giá: {{number_format($sach->gia)}}đ</p>
                        <a class="btn btn-outline-info my-1 w-100" href="{{route('sach',['slug'=>$sach->slug,'id'=>$sach->id])}}">Thông tin sách</a>
                        <a class="btn btn-outline-success w-100" href="#">Thêm vào giỏ hàng</a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-12">
            {{$saches->links()}}
        </div>
    </div>

@endsection


