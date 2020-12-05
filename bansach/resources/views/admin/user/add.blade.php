@extends('layouts.admin')

@section('title')
    <title>Thêm nhân viên</title>
@endsection

@section('css')
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/admins/user/add/add.css')}}" rel="stylesheet" />
    <style>
        .select2-selection__choice{
            background-color: #0c525d !important;
        }
    </style>
@endsection

@section('js')
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('/admins/user/add/add.js')}}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Nhân viên', 'key'=>'Thêm'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên</label>
                                <input value="{{old('name')}}" type="text" name="name" class="form-control" placeholder="Nhập tên">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input value="{{old('email')}}" type="text" name="email" class="form-control" placeholder="Nhập email">
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input  type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="form-group">
                                <label>Chọn vai trò</label>
                                <select name="role_id[]" class="form-control select2_init" multiple>
                                    <option value=""></option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
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

