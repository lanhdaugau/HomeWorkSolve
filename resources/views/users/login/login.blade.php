@extends('users.layout.main')
@section('title')
    Đăng nhập
@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('/css')}}/invalid.css">
@endpush
@section('contents')
    <div class="wrapper">
        <div class="page-header" style="background-image: url('../assets/img/sections/bruno-abatti.jpg');">
            <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <div class="card card-register">
                            <h3 class="card-title text-center">Đăng nhập</h3>
                            <div class="social">
                                <a href="{{ route('socialR', 'facebook') }}" class="btn btn-just-icon btn-facebook"><i
                                        class="fa fa-facebook"></i></a>
                                {{-- <a href="{{ route('socialR', 'zalo' ) }}" class="btn btn-just-icon btn-facebook"><i
                                        class="fa fa-google"></i></a> --}}

                            </div>


                            <div class="division">
                                <div class="line l"></div>
                                <span>or</span>
                                <div class="line r"></div>
                            </div>
                            <form class="login-form" method="POST" action="{{ route('login.login') }}" id="form-1">
                                @csrf

                                <div class="form-group">

                                    <input id="email" name="email" type="text" placeholder="VD: email@domain.com"
                                        class="form-control">
                                    <div class="form-control-feedback"></div>

                                </div>


                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <br>

                                <div class="form-group">

                                    <input id="password" name="password" type="password" placeholder="Mật khẩu"
                                        class="form-control">
                                    <div class="form-control-feedback"></div>

                                </div>
                                <br>

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

                                <input type="hidden" value="{{session('urlRedirect')}}" name="urlRedirect">

                                <button class="btn btn-block btn-round">Đăng nhập</button>
                            </form>
                            <div class="login">
                                <p>Tạo tài khoản mới? <a href="{{ route('register.register') }}"> Đăng kí</a>.</p>
                            </div>
                            <div class="forgot">
                                <a href="{{ route('forgot') }}" class="btn btn-link btn-danger">Quên mật khẩu?</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('/js') }}/validator.js"></script>
    <script>
        Validator({
            form: '#form-1',
            Errorselector: '.form-control-feedback',
            rules: [

                Validator.isRequired('#email'),
                Validator.isEmail('#email'),
                Validator.isRequired('#password'),
                Validator.isMinLength('#password', 4),


            ]
        })
    </script>
    {!! NoCaptcha::renderJs() !!}
@endpush
