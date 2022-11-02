<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\CheckMailRequest;
use App\Http\Requests\AdminRequest\LoginAdminRequest;
use App\Http\Requests\ResetPassWordRequest;
use App\Mail\ActiveMail;
use App\Mail\ForgotMail;
use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    // public function __construct()
    // {

    // }
    public function index()
    {
        return view('admin.login.login');
    }
    public function login(LoginAdminRequest $request)
    {
        $check = false;

        if ($request->remember != null) {


            $check= Auth::attempt( $request->only(['email','password',]),true);
            
            Cookie::queue('adminuser', $request->email, 1440);
            Cookie::queue('adminpassword', $request->password, 1440);
        
        } else {
            $check = Auth::attempt($request->only(['email', 'password',]));
        }

        if ($check) {
            return redirect()->route('dashboard.index');
        }
        return back()->withErrors(['errorLogin' => 'Sai mật khẩu hoặc tài khoản']);
    }
    public function forgot(){
        return view('admin.login.forgot');
    }
    public function reset(CheckMailRequest $request)
    {
        
        $email = $request->email;
        
        $userLogin = Login::where('email', $email)->first();
        
        if($userLogin){
            $activeToken = base64_encode($request->email);
            
            $route = route('admin.resetPass', $activeToken);
            
            if (Mail::to($userLogin->email)->send(new ForgotMail($route))) {
                return redirect()->back()->with('success', 'Vui lòng kiểm tra email');
            }
        }
        else {
            return redirect()->back()->withErrors(['errorLogin' => 'Email không chính xác!']);
        }
    }
    public function resetPass($token)
    {
        if(User::where('activeToken',$token)->first()){
            return view('admin.login.reset', ['token' => $token]);
        }
        return view('errors.404');
    }
    public function confirm(ResetPassWordRequest $request, $token)
    {
        $user = User::where('activeToken', $token)->first();
        $userLogin = Login::where('idUsers', $user->id)->first();

        if ($userLogin->update([
            'password' => bcrypt($request->password),
        ])) {
            if (Auth::loginUsingId($userLogin->id)) {
                return redirect()->route('dashboard.index');
            }
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
