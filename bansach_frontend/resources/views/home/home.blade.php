@php
$baseUrl = 'http://127.0.0.1:8080';
@endphp
@extends('layouts.master')

@section('title')
    <title>Trang chủ | Sách Đà Lạt</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('home/home.css')}}">
@endsection

@section('content')

    <div class="container" id="content">
        <div id="slide" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($sliders as $key=>$slider)
                <div class="carousel-item {{$key == 0 ? 'active':''}}">
                    <img class="d-block w-100" height="400px" src="{{$baseUrl . $slider->image_path}}">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="BestSeller" class="my-5">
            <h3 class="d-inline">Sách bán chạy</h3>
            <a class="d-inline btn btn-outline-primary float-right" href="#">Xem thêm</a>
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
        <div id="New">
            <h3 class="d-inline">Sách mới nhất</h3>
            <a class="d-inline btn btn-outline-primary float-right" href="#">Xem thêm</a>
            <hr>
            <div class="row">
                @foreach($sachesNew as $sachNew)
                    <div class="col-3-5 mx-auto my-2 border border-secondary">
                        <img height="400px" width="310px" src="{{$baseUrl.$sachNew->feature_image_path}}">
                        <p class="h6">{{$sachNew->ten_sach}}</p>
                        <p class="h6">Giá: {{number_format($sachNew->gia)}}đ</p>
                        <a class="btn btn-outline-info my-1 w-100" href="{{route('sach',['slug'=>$sach->slug,'id'=>$sach->id])}}">Thông tin sách</a>
                        <a class="btn btn-outline-success w-100" href="#">Thêm vào giỏ hàng</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection


