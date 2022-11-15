@extends('users.layout.main')
@section('title')
    Đăng ký
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
                            <form class="login-form" method="POST" action="{{ route('register.register') }}"
                                id="form-1">
                                @csrf
                                <div class="form-group">

                                    <input id="email" name="email" type="text" placeholder="Email"
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

                                <div class="form-group">

                                    <input id="password_confirmation" name="password_confirmation" type="password"
                                        placeholder="Mật khẩu" class="form-control">
                                    <div class="form-control-feedback"></div>

                                </div>
                                <br>
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
                                <p>Bạn đã có tài khoản? <a href="{{ route('login.login') }}">Đăng nhập</a></p>
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
                Validator.isRequired('#password_confirmation'),
                Validator.isConfirm('#password_confirmation', function() {
                    return document.querySelector('#form-1 #password').value;
                }, 'Mật khẩu không khớp')


            ]
        })
    </script>
@endpush
