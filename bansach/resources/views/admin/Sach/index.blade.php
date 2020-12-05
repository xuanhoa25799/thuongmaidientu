@extends('layouts.admin')

@section('title')
    <title>Danh sách sách</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('admins/product/index/list.css')}}">
@endsection
@section('js')
    <script src="{{asset('vendor/sweetalert/sweetalert2@10.js')}}"></script>
    <script src="{{asset('admins/main.js')}}"></script>
@endsection


@section('content')

    <div class="content-wrapper">

        @include('partials.content-header', ['name' => 'Sach', 'key'=>'Danh sách'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('sach.create')}}" class="btn btn-success float-right m-2">Thêm sách</a>
                    </div>
                    <div class = "col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên sách</th>
                                <th scope="col">Thể loại</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Giá sách</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Năm xuất bản</th>
                                <th scope="col">Ngày nhập</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($saches as $sach)
                                <tr>
                                    <th scope="row">{{$sach->id}}</th>
                                    <td>{{$sach->ten_sach}}</td>
                                    <td>{{optional($sach->theloai)->tentheloai}}</td>
                                    <td>{{$sach->mo_ta}}</td>
                                    <td>
                                        <img class= "product_image_150_100" src="{{$sach->feature_image_path}}" alt="">
                                    </td>
                                    <td>{{number_format($sach->gia)}}</td>
                                    <td>{{$sach->so_luong}}</td>
                                    <td>{{$sach->nam_xb}}</td>
                                    <td>{{$sach->created_at}}</td>
                                    <td>
                                        <a href="{{route('sach.edit',['id'=>$sach->id])}}" class="btn btn-default">Sửa</a>
                                        <a href="" data-url="{{route('sach.delete',['id'=>$sach->id])}}" class="btn btn-danger action_delete">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$saches->links()}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


