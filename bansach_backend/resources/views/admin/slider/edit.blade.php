@extends('layouts.admin')

@section('title')
    <title>Sửa slider</title>
@endsection

@section('css')
    <link href="{{asset('admins/slider/add/add.css')}}" rel="stylesheet" />
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Slider', 'key'=>'Sửa'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('slider.update',['id'=>$slider->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên slider</label>
                                <input value="{{$slider->name}}" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tên slider">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea placeholder="Nhập mô tả" name="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{$slider->description}}</textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="image_path" class="form-control-file @error('image_path') is-invalid @enderror">
                                @error('image_path')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="col-md-4">
                                    <div class="row">
                                        <img class="image_slider" src="{{$slider->image_path}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

