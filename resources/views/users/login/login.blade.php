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
                            <form class="register-form" method="POST" action="{{route('login.login')}}">
                                @csrf
                                <label>Email</label>
                                <input type="email" class="form-control no-border" placeholder="Email" name="email">

                                <label>Password</label>
                                <input type="password" class="form-control no-border" placeholder="Password" name="password">
                                <button class="btn btn-danger btn-block btn-round">Login</button>
                            </form>
                            <div class="forgot">
                                <a href="#paper-kit" class="btn btn-link btn-danger">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
    </div>

</body>
</html>

