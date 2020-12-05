@extends('layouts.admin')

@section('title')
    <title>Thêm thể loại</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Thể loại', 'key'=>'Thêm'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('theloai.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên thể loại</label>
                                <input type="text" name="tentheloai" class="form-control" placeholder="Nhập tên thể loại">
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

