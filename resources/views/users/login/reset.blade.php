@extends('users.layout.main')
@section('title')
    Mật khẩu mới
@endsection
@section('contents')
    <div class="wrapper">
        <div class="page-header" style="background-image: url('{{asset('')}}/assets/img/sections/bruno-abatti.jpg');">
            <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <div class="card card-register">
                            <h3 class="card-title">Tạo mật khẩu mới</h3>

                            <form class="register-form" method="POST" action="{{ route('confirm',$token) }}">
                                @csrf

                                <label>Mật khẩu mới</label>
                                <input type="password" class="form-control" placeholder="Mật khẩu mới" name="password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label>Nhập lại mật khẩu mới</label>
                                <input type="password" class="form-control" placeholder="Nhập lại mật khẩu mới"
                                    name="password_confirmation">
                                @error('cpassword')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <button class="btn btn-danger btn-block btn-round">Tạo mới mới</button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
