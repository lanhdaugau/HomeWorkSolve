@extends('admin.layout.main')
@section('content')
    <div class="login-page" style="min-height: 466px;">


        <div class="login-box">

            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>Admin</b></a>
                </div>
                <div class="card-body">
                    {{-- <p class="login-box-msg">Sign in to start your session</p> --}}
                    <form action="" method="post" >
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Email" name="email" 
                            @if (Cookie::has('adminuser'))
                            value="{{Cookie::get('adminuser')}}"
                                
                            @endif>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        
                    @enderror
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password"
                            
                            @if (Cookie::has('adminpassword'))
                            value="{{Cookie::get('adminpassword')}}"
                                
                            @endif>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember" name="remember" value="1"   @if (Cookie::has('adminuser')) @checked(true) @endif>
                                    <label for="remember">
                                        Lưu mật khẩu
                                    </label>
                                </div>
                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary">Đăng nhập</button>
                            </div>

                        </div>
                    </form>
                    

                    <p class="mb-1">
                        <a href="{{ route('admin.forgot') }}">Quên mật khẩu</a>
                    </p>
                    @error('errorLogin')
                    <div class="alert alert-danger">{{ $message }}</div>
                        
                    @enderror
                  
                   
                </div>

            </div>
        </div>
    </div>
@endsection
