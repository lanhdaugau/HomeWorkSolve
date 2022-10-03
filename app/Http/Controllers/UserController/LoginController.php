<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Mail\ActiveMail;
use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
                'password' => 'required',

            ],
            [
                'required' => 'Trường này không được bỏ trống !',
                'email' => 'Không đúng định dạng email',
                

            ]
        );
       
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
             
            if(Auth::user()->isActive != 1){
                return redirect()->back()->withErrors(['errorLogin' => 'Vui lòng kiểm tra email!']);
            }
            return redirect()->route('user.index');
        }
        return redirect()->back()->withErrors(['errorLogin' => 'Email hoặc mật khẩu không chính xác!']);
    }
    public function forgot()
    {
        return view('users.login.forgot');
    }
    public function checkMail(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',


            ],
            [
                'required' => 'Trường này không được bỏ trống !',
                'email' => 'Không đúng định dạng email',

            ]
        );
        $email = $request->email;
        $userLogin = Login::where('email', $email)->first();

        if ($userLogin = Login::where('email', $email)->first()) {
            $activeToken = base64_encode($request->email);
            $route = route('resetPass', $activeToken);
            if (Mail::to($userLogin->email)->send(new ActiveMail($route))) {
                return redirect()->back()->with('success', 'Vui lòng kiểm tra email');
            }
        } else {
            return redirect()->back()->withErrors(['errorLogin' => 'Email không chính xác!']);
        }
    }
    public function resetPass($token)
    {

        return view('users.login.reset', ['token' => $token]);
    }
    public function confirm(Request $request, $token)
    {

        $request->validate(
            [
                'password' => 'required|confirmed|min:4',
                'password_confirmation' => 'required ',
            ],
            [
                'required' => 'Trường này không được bỏ trống !',
                'min' => 'Độ dài quá ngắn',
            ]
        );
        $user = User::where('activeToken', $token)->first();
        $userLogin = Login::where('idUsers', $user->id)->first();

        if ($userLogin->update([
            'password' => bcrypt($request->password),
        ]))
        {
            if(Auth::loginUsingId($userLogin->id)){
                return redirect()->route('user.index');
            }
        }
        //alo
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.login');
    }
}
