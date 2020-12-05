@extends('layouts.admin')

@section('title')
    <title>Sửa sách</title>
@endsection

@section('css')
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admins/product/add/add.css')}}" rel="stylesheet" />
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Sách', 'key'=>'Sửa'])
        <form action="{{route('sach.update',['id'=>$sach->id])}}" method="post" enctype="multipart/form-data">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">

                            @csrf
                            <div class="form-group">
                                <label>Tên sách</label>
                                <input type="text" name="ten_sach" class="form-control" placeholder="Nhập tên sách" value="{{$sach->ten_sach}}">
                            </div>
                            <div class="form-group">
                                <label>Chọn thể loại</label>
                                <select class="form-control select2_init" name="ma_the_loai">

                                    {!! $htmlOption !!}
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Giá sách</label>
                                <input type="text" name="gia" class="form-control" placeholder="Nhập giá sách" value="{{$sach->gia}}">
                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <input type="file" name="feature_image_path" class="form-control-flie">
                                <div class ="col-md-4 container_image_detail">
                                    <div class="row">
                                        <img class="feature_image" src="{{$sach->feature_image_path}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ảnh chi tiết</label>
                                <input type="file" multiple name="image_path[]" class="form-control-file">
                                <div class ="col-md-12 container_image_detail">
                                    <div class="row">
                                        @foreach($sach->images as $productImageItem)
                                        <div class="col-md-3">
                                            <img class="image_detail_product" src="{{$productImageItem->image_path}}" alt="">
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input type="number" name="so_luong" class="form-control" placeholder="Nhập số lượng" value="{{$sach->so_luong}}">
                            </div>
                            <div class="form-group">
                                <label>Năm xuất bản</label>
                                <input type="text" name="nam_xb" class="form-control" placeholder="Nhập năm xuất bản" value="{{$sach->nam_xb}}">
                            </div>


                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea name="mo_ta" class="form-control tinymce_editor_init" rows="5"placeholder="Nhập mô tả sách">{{$sach->mo_ta}}</textarea>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('js')
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{{asset('admins/product/add/add.js')}}"></script>
@endsection

