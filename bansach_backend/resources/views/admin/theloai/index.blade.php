@extends('layouts.admin')

@section('title')
    <title>Danh sách thể loại</title>
@endsection

@section('content')

    <div class="content-wrapper">

        @include('partials.content-header', ['name' => 'Thể loại', 'key'=>'Danh sách'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('theloai.create')}}" class="btn btn-success float-right m-2">Thêm thể loại sách</a>
                    </div>
                    <div class = "col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên thể loại</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($theloais as $theloai)
                            <tr>
                                <th scope="row">{{$theloai->id}}</th>
                                <td>{{$theloai->tentheloai}}</td>
                                <td>
                                    <a href="{{route('theloai.edit', ['id'=>$theloai->id])}}" class="btn btn-default">Sửa</a>
                                    <a href="{{route('theloai.delete', ['id'=>$theloai->id])}}" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$theloais->links()}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
