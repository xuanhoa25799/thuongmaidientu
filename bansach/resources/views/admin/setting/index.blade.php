@extends('layouts.admin')

@section('title')
    <title>Danh sách setting</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('admins/setting/index/index.css')}}">
    <script src="admins/main.js"></script>
@endsection

@section('js')
    <script src="{{asset('vendor/sweetalert/sweetalert2@10.js')}}"></script>
    <script src="{{asset('admins/main.js')}}"></script>
@endsection


@section('content')

    <div class="content-wrapper">

        @include('partials.content-header', ['name' => 'Setting', 'key'=>'Danh sách'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group float-right">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Thêm setting
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('setting.create').'?type=Text'}}">Text</a></li>
                                <li><a href="{{route('setting.create').'?type=Textarea'}}">Textarea</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class = "col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Config key</th>
                                <th scope="col">Config value</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($settings as $setting)
                                <tr>
                                    <th scope="row">{{$setting->id}}</th>
                                    <td>{{$setting->config_key}}</td>
                                    <td>{{$setting->config_value}}</td>
                                    <td>
                                        <a href="{{route('setting.edit',['id'=>$setting->id]).'?type='.$setting->type}}" class="btn btn-default">Sửa</a>
                                        <a data-url = "{{route('setting.delete',['id'=>$setting->id])}}" href="" class="btn btn-danger action_delete">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$settings->links()}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
