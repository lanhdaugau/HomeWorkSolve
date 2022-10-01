<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Mail\ActiveMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:4',
                'password_confirmation' => 'required ',
            ],
            [
                'required' => 'Trường này không được bỏ trống !',
                'email' => 'Không đúng định dạng email',
                'lt' => 'Không khớp mật khẩu',
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
            
            DB::table('login')->insert(
                [
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'idUsers' => $idUser,
                ]
            );
            $route = route('register.active', $activeToken);
            $mail = Mail::to($check->email)->send(new ActiveMail($route));
        };
    }

    public function active(Request $request)
    {
        dd($request);
    }

    public function logout()
    {
        # code...
    }
}