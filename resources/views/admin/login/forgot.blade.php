@extends('admin.layout.main')
@section('content')
<div class="login-page" style="min-height: 320px;">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Điền email của bạn để thay đổi mật khẩu.</p>
                <form action="{{ route('admin.reset') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    
                    @enderror
                    @if (session()->has('success'))
                    <div class="alert alert-success">

                            {{ session()->get('success') }}

                    </div>
                    @endif
                    @error('errorLogin')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                    @enderror
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Yêu cầu đổi mật khẩu mới</button>
                        </div>

                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="{{ route('admin.login') }}">Đăng nhập</a>
                </p>
            </div>

        </div>
    </div>


    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>


    <iframe id="nr-ext-rsicon"
        style="position: absolute; display: none; width: 50px; height: 50px; z-index: 2147483647; border-style: none; background: transparent;"></iframe>
</div>
@endsection