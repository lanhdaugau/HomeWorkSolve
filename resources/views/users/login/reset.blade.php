@extends('users.layout.main')
@section('title')
    Mật khẩu mới
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('/css')}}/invalid.css">
@endpush
@section('contents')
    <div class="wrapper">
        <div class="page-header" style="background-image: url('{{asset('')}}/assets/img/sections/bruno-abatti.jpg');">
            <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <div class="card card-register">
                            <h3 class="card-title">Tạo mật khẩu mới</h3>

                            <form class="register-form" method="POST" action="{{ route('confirm',$token) }}" id="form-1">
                                @csrf

                                
                                <div class="form-group">
                                    <label>Mật khẩu mới</label>
                                    <input id="password" name="password" type="password" placeholder="Mật khẩu"
                                        class="form-control">
                                    <div class="form-control-feedback"></div>

                                </div>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu mới</label>
                                    <input id="password_confirmation" name="password_confirmation" type="password"
                                        placeholder="Nhập lại mật khẩu mới" class="form-control">
                                    <div class="form-control-feedback"></div>

                                </div>
                                <br>
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
@push('js')
    <script src="{{ asset('/js') }}/validator.js"></script>
    <script>
        Validator({
            form: '#form-1',
            Errorselector: '.form-control-feedback',
            rules: [
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
