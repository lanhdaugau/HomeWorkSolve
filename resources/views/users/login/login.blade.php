@extends('users.layout.main')
@section('title')
    Đăng nhập
@endsection
@push('css')
    <style>
        .form-group {
            display: flex;
            margin-bottom: 16px;
            flex-direction: column;
        }

        .form-label,
        .form-message {
            text-align: left;
        }

        .form-label {
            font-weight: 700;
            padding-bottom: 6px;
            line-height: 1.8rem;
            font-size: 1.4rem;
        }

        .form-control {
            height: 40px;
            padding: 8px 12px;
            border: 1px solid #b3b3b3;
            border-radius: 3px;
            outline: none;
            font-size: 14px
        }

        .form-control:hover {
            border-color: #1dbfaf;
        }

        .form-group.invalid .form-control {
            border-color: #f33a58;
        }

        .form-group.invalid .form-message {
            color: #f33a58;
        }

        .form-message {
            font-size: 1.2rem;
            line-height: 1.6rem;
            padding: 4px 0 0;
        }

        .form-submit {
            outline: none;
            background-color: #1dbfaf;
            margin-top: 12px;
            padding: 12px 16px;
            font-weight: 600;
            color: #fff;
            border: none;
            width: 100%;
            font-size: 14px;
            border-radius: 8px;
            cursor: pointer;
        }
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
