
@extends('users.layout.main')
@section('title')
    Đăng ký
@endsection
@section('contents')
<div class="wrapper">
    <div class="page-header" style="background-image: url('../assets/img/sections/soroush-karimi.jpg');">
        <div class="filter"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 col-12 ml-auto">
                    <div class="info info-horizontal">
                        <div class="icon">
                            <i class="fa fa-umbrella"></i>
                        </div>
                        <div class="description">
                            <h3> We've got you covered </h3>
                            <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.
                                Everything you need in a single case.</p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon">
                            <i class="fa fa-map-signs"></i>
                        </div>
                        <div class="description">
                            <h3> Clear Directions </h3>
                            <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize
                                timely deliverables for real-time schemas.</p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon">
                            <i class="fa fa-user-secret"></i>
                        </div>
                        <div class="description">
                            <h3> We value your privacy </h3>
                            <p>Completely synergize resource taxing relationships via premier niche markets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-12 mr-auto">
                    <div class="card card-register">
                        <h3 class="card-title text-center">Đăng kí</h3>

                        <div class="division">
                            <div class="line l"></div>

                            <div class="line r"></div>
                        </div>
                        <form class="register-form" method="POST" action="{{ route('register.register') }}">
                            @csrf
                            <input type="text" class="form-control" placeholder="Email" name="email">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <input type="password" class="form-control" placeholder="Nhập lại mật khẩu"
                                name="password_confirmation">
                            @error('cpassword')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button class="btn btn-block btn-round">Đăng kí</button>
                            <br>
                            @if (session()->has('success'))
                                <div class="alert alert-success">

                                    {{ session()->get('success') }}

                                </div>
                            @endif
                        </form>
                        <div class="login">
                            <p>Bạn đã có tài khoản? <a href="{{ route('login.login')}}">Đăng nhập</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection