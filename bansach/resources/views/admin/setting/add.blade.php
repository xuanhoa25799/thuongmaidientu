@extends('layouts.admin')

@section('title')
    <title>Thêm setting</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Setting', 'key'=>'Thêm'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('setting.store').'?type='.request()->type}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Config key</label>
                                <input type="text" name="config_key" class="form-control @error('config_key') is-invalid @enderror" placeholder="Nhập config key">
                                @error('config_key')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            @if(request()->type ==='Text')
                                <div class="form-group">
                                    <label>Config value</label>
                                    <input type="text" name="config_value" class="form-control @error('config_value') is-invalid @enderror" placeholder="Nhập config value">
                                    @error('config_value')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                @elseif(request()->type ==='Textarea')
                                <textarea name="config_value" class="form-control @error('config_value') is-invalid @enderror" placeholder="Nhập config value" rows="5"></textarea>
                                @error('config_value')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            @endif
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

