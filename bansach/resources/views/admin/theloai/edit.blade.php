@extends('layouts.admin')

@section('title')
    <title>Sửa thể loại</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Thể loại', 'key'=>'Sửa'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('theloai.update',['id'=>$theloai->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên thể loại</label>
                                <input type="text" name="tentheloai" value="{{$theloai->tentheloai}}" class="form-control" placeholder="Nhập tên thể loại">
                            </div>
                            <div class="form-group">
                                <label>Chọn thể loại cha</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Chọn thể loại cha</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

