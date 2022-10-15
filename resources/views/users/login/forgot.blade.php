@extends('users.layout.main')


@section('contents')
    
 
    <div class="wrapper">
        <div class="page-header" style="background-image: url('http://doan.test//image/bruno-abatti.jpg');">
            <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <div class="card card-register">
                            <h3 class="card-title">Nhập email của bạn</h3>
                            <form class="register-form" method="POST" action="">
                                @csrf
                                <label>Nhập email của bạn</label>
                                <input type="email" class="form-control no-border" placeholder="Email" name="email">
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
