<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('users.login.login');
    }
    public function login(Request $request)
    {
        dd($request);
    }
    public function logout()
    {
        # code...
    }
}
