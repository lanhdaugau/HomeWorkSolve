@extends('admin.layout.main')
@section('content')
    <div class="login-page" style="min-height: 398px;">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>Admin</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Thay đổi mật khẩu.
                    </p>
                    <form action="{{ route('admin.resetPassAdminUpdate') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Mật khẩu mới" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Điền lại mật khẩu mới" name="password_confirmation">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @error('cpassword')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Change password</button>
                            </div>

                        </div>
                    </form>
                    <p class="mt-3 mb-1">
                        <a href="{{url()->previous()}}">Back</a>
                    </p>
                </div>

            </div>
        </div>


        <script src="../../plugins/jquery/jquery.min.js"></script>

        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>


    </div>
@endsection
