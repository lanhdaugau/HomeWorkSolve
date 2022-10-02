@extends('users.layout.master')
<!doctype html>
<html lang="en">
<head>
	

</head>
<body class="full-screen login">

   
    <div class="wrapper">
        <div class="page-header" style="background-image: url('http://doan.test//image/bruno-abatti.jpg');">
            <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <div class="card card-register">
                            <h3 class="card-title">Welcome</h3>
                            
                            <form class="register-form" method="POST" action="reset/{{$token}}">
                                @csrf
                                
                                <label>Mật khẩu mới</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label>Nhập lại mật khẩu mới</label>
                                <input type="password" class="form-control" placeholder="Confirm Password"
                                    name="password_confirmation">
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

</body>
</html>

