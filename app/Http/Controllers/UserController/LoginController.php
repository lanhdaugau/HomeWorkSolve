<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('users.login.login');
    }
    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:4',
                
            ],
            [
                'required' => 'Trường này không được bỏ trống !',
                'email' => 'Không đúng định dạng email',
                'min' => 'Độ dài quá ngắn',
                
            ]
        );

      if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],true)){
            return redirect()->route('user.index');
        }
        return redirect()->back()->withErrors(['errorLogin' => 'Email hoặc mật khẩu không chính xác!']);
    }
    public function forgot()
    {
        # code...
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.login');
    }
}
