<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Mail\ActiveMail;
use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

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
                'g-recaptcha-response' => 'captcha'

            ],
            [
                'required' => 'Trường này không được bỏ trống !',
                'email' => 'Không đúng định dạng email',
                'captcha' => 'Vui lòng xác nhận Capcha',


            ]
        );

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {

            if (Auth::user()->isActive != 1) {
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
        ])) {
            if (Auth::loginUsingId($userLogin->id)) {
                return redirect()->route('user.index');
            }
        }
    }
    public function logout()
    {

        Auth::logout();
        return redirect()->route('user.index');
    }
    public function callBack($provider)
    {   
        dd($provider);
        if($provider=='google'){
            $user= Socialite::driver('google')->stateless()->user();
        }
        else{
            $user= Socialite::driver($provider)->user();
        }
        dd($user);
        $userCheck=Login::where('email',$user->email)->first();
        if(!empty($userCheck)){
           Auth::loginUsingId($userCheck->id);
           return redirect()->route('user.index');
        }
        $userNew= new User();
        $userNew->name = $user['name'];
        
        $userNew->avatar=$user['avatar'];
        $userNew= $userNew->save();

        
           
            
            $login=Login::create(
                [
                    'email' => $user->email,
                    'password' => bcrypt($user['email']),
                    'idUsers' => $userNew['id'],
                ]
            );
            if($login){
                Auth::loginUsingId($login->id);
                return redirect()->route('user.index');
            }
        

        }
    public function redirect($provider)
    {

        return Socialite::driver($provider)->redirect();
    }
}
