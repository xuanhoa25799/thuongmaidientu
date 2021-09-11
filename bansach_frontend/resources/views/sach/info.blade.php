@php
    $baseUrl = 'http://127.0.0.1:8080';
@endphp
@extends('layouts.master')

@section('title')
    <title>{{$sach->ten_sach}} | Sách Đà Lạt</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('home/home.css')}}">
@endsection

@section('content')

    <div class="container" id="content">
        <div class="row">
            <div class="image col-4">

                <img class="mx-2" height="400px" width="320px" src="{{$baseUrl.$sach->feature_image_path}}" alt="{{$baseUrl.$sach->feature_image_name}}" >
                <button class="btn btn-outline-primary">Thêm vào giỏ hàng</button>
                <button class="btn btn-outline-success w-50">Mua ngay</button>
            </div>
            <div class="info col-6 mx-4">
                <h2 class="my-4">{{$sach->ten_sach}}</h2>
                <p class="h5">Nhà cung cấp: Nhà xuất bản Kim Đồng</p>
                <p class="h5">Tác giả: Aoyama Gosho</p>
                <p class="price">Giá: {{number_format($sach->gia)}}đ</p>
                <div class="row mt-auto mb-4">
                    <p class="col-3 h4">Số lượng</p>
                    <input type="number" value="1" name="">
                </div>
                <p class="h3 mb-4">Mô tả: {{$sach->mo_ta}}</p>


            </div>
        </div>
    </div>

@endsection


