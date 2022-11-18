@extends('users.layout.main')
@section('title')
    Quên mật khẩu
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('/css')}}/invalid.css">
@endpush
@section('contents')
    
 
    <div class="wrapper">
        <div class="page-header" style="background-image: url('{{asset('')}}/assets/img/sections/bruno-abatti.jpg')">
            <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <div class="card card-register">
                            <h3 class="card-title">Nhập email của bạn</h3>
                            <form class="register-form" method="POST" action="" id="form-1">
                                @csrf
                                <div class="form-group">
                                    <label>Nhập email của bạn</label>
                                    <input id="email" name="email" type="text" placeholder="VD: email@domain.com"
                                        class="form-control">
                                    <div class="form-control-feedback"></div>

                                </div>
                                <br>
                                
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                @if (session()->has('success'))
                                <div class="alert alert-success">

                                        {{ session()->get('success') }}

                                </div>
                                @endif
                                @error('errorLogin')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <button class="btn btn-danger btn-block btn-round">Xác nhận</button>
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

            Validator.isRequired('#email'),
            Validator.isEmail('#email'),


        ]
    })
</script>
@endpush