@extends('layouts.admin')

@section('title')
    <title>Thêm vai trò</title>
@endsection

@section('css')
    <link href="{{asset('admins/roles/add/add.css')}}" rel="stylesheet" />

@endsection

@section('js')
    <script src="{{asset('admins/roles/add/add.js')}}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Vai trò', 'key'=>'Thêm'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{route('roles.store')}}" method="post" enctype="multipart/form-data" style="width: 100%">
                    <div class="col-md-12">

                            @csrf
                            <div class="form-group">
                                <label>Tên vai trò</label>
                                <input value="{{old('name')}}" type="text" name="name" class="form-control" placeholder="Nhập tên vai trò">
                            </div>
                            <div class="form-group">
                                <label>Mô tả vai trò</label>
                                <textarea placeholder="Nhập mô tả" name="display_name" class="form-control" rows="4">{{old('display_name')}}</textarea>
                            </div>

                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <label>
                                    <input type="checkbox" class="checkall">
                                    Checkall
                                </label>
                            </div>
                            @foreach($permissionsParents as $permissionsParent)
                                <div class="card border-primary mb-3 col-md-12">
                                    <div class="card-header">
                                        <label>
                                            <input type="checkbox" value="" class="checkbox_wrapper">
                                        </label>
                                        Module {{$permissionsParent->name}}
                                    </div>
                                    <div class="row">
                                        @foreach($permissionsParent->permissionsChildren as $permissionsChild)
                                            <div class="card-body text-primary col-md-3">
                                                <h5 class="card-title">
                                                    <label>
                                                        <input type="checkbox" class="checkbox_children" name="permission_id[]"value="{{$permissionsChild->id}}">
                                                    </label>
                                                    {{$permissionsChild->name}}
                                                </h5>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

