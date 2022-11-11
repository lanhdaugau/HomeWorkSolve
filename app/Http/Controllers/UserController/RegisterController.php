<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Mail\ActiveMail;
use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    public function index()
    {
        return view('users.login.register');
    }
    public function register(Request $request)
    {

        $request->validate(
            [
                'email' => 'required|email|unique:login,email',
                'password' => 'required|confirmed|min:4',
                'password_confirmation' => 'required ',
            ],
            [
                'required' => 'Trường này không được bỏ trống !',
                'email' => 'Không đúng định dạng email',
                
                'min' => 'Độ dài quá ngắn',
                'unique' => 'Email đã tồn tại',
            ]
        );
        $activeToken = base64_encode($request->email);
        $data = $request->all();
        $data['activeToken'] = $activeToken;
        unset($data['password']);
    
        $userModel = new User();
        
        $check = $userModel->create($data);
        if ($check) {
            $idUser = $check->id;
            
            $login=Login::create(
                [
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'idUsers' => $idUser,
                ]
            );
            $route = route('register.active', $activeToken);
            
            if(Mail::to($login->email)->send(new ActiveMail($route))){
                return redirect()->back()->with('success','Vui lòng kiểm tra email');
            }
        };
    }

    public function active($token)
    {
        $user = User::where('activeToken', $token)->first();
        $user->update(
            [
                'name'=>'User'.$user->id
            ]
        );
        $userLogin = Login::where('idUsers',$user->id)->first();
        $userLogin->update(['isActive' => 1]);
        if(Auth::loginUsingId($userLogin->id)){
            return redirect()->route('user.index');
        }
    }
  
}
