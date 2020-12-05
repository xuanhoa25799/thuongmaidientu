@extends('layouts.admin')

@section('title')
    <title>Thêm sách</title>
@endsection

@section('css')
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admins/product/add/add.css')}}" rel="stylesheet" />
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Sách', 'key'=>'Thêm'])
        <form action="{{route('sach.store')}}" method="post" enctype="multipart/form-data">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">

                            @csrf
                            <div class="form-group">
                                <label>Tên sách</label>
                                <input value = "{{old('ten_sach')}}" type="text" name="ten_sach" class="form-control @error('ten_sach') is-invalid @enderror" placeholder="Nhập tên sách">
                                @error('ten_sach')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Chọn thể loại</label>
                                <select class="form-control select2_init @error('ma_the_loai') is-invalid @enderror" name="ma_the_loai">
                                    <option value="">Chọn thể loại cha</option>
                                    {!! $htmlOption !!}
                                </select>
                                @error('ma_the_loai')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Giá sách</label>
                                <input value = "{{old('gia')}}" type="text" name="gia" class="form-control @error('gia') is-invalid @enderror" placeholder="Nhập giá sách">
                                @error('gia')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <input type="file" name="feature_image_path" class="form-control-flie">
                            </div>
                            <div class="form-group">
                                <label>Ảnh chi tiết</label>
                                <input type="file" multiple name="image_path[]" class="form-control-file">
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input value = "{{old('so_luong')}}" type="number" name="so_luong " class="form-control @error('so_luong') is-invalid @enderror" placeholder="Nhập số lượng">
                                @error('so_luong')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Năm xuất bản</label>
                                <input value = "{{old('nam_xb')}}" type="text" name="nam_xb" class="form-control @error('nam_xb') is-invalid @enderror" placeholder="Nhập năm xuất bản">
                                @error('nam_xb')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea name="mo_ta" class="form-control tinymce_editor_init @error('mo_ta') is-invalid @enderror" rows="5"placeholder="Nhập mô tả sách">{{old('mo_ta')}}</textarea>
                            @error('mo_ta')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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

