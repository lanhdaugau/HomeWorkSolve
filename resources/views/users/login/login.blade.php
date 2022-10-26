@extends('users.layout.main')
@section('title')
    Đăng nhập
@endsection
@push('css')
    <style>
      
       
    </style>
@endpush
@section('contents')
<div class="wrapper">
    <div class="page-header" style="background-image: url('../assets/img/sections/bruno-abatti.jpg');">
        <div class="filter"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                    <div class="card card-register">
                        <h3 class="card-title text-center">Login</h3>
                        <div class="social">
                            <button href="#paper-kit" class="btn btn-just-icon btn-facebook"><i
                                    class="fa fa-facebook"></i></button>
                            <button href="#paper-kit" class="btn btn-just-icon btn-google"><i
                                    class="fa fa-google"></i></button>
                        </div>

                        <div class="division">
                            <div class="line l"></div>
                            <span>or</span>
                            <div class="line r"></div>
                        </div>
                        <form class="register-form" method="POST" action="{{route('login.login')}}">
                            @csrf
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @error('errorLogin')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @error('g-recaptcha-response')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                {!! NoCaptcha::display() !!}
                            </div>
                            
                        
                            
                            <button class="btn btn-block btn-round">Đăng nhập</button>
                        </form>
                        <div class="login">
                            <p>Tạo tài khoản mới? <a href="{{route('register.register')}}"> Đăng kí</a>.</p>
                        </div>
                        <div class="forgot">
                            <a href="{{route('forgot')}}" class="btn btn-link btn-danger">Quên mật khẩu?</a>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('js')


{!! NoCaptcha::renderJs() !!}
@endpush