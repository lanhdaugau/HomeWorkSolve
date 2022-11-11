<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\UserRequest\UpdateRequest;
use App\Http\Requests\ResetPassWordRequest;
use App\Models\Login;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function setting()
    {

        $admin = User::find(Auth::user()->idUsers);

        return view('admin.setting.index', compact(['admin']));
    }
    public function update(UpdateRequest $request)
    {

        $admin = User::find(Auth::user()->idUsers);
        $request->merge(['isActive',1]);
       
        if ($admin->update($request->all())) {

            return redirect()->back()->with('message', 'Admin đã được cập nhật thành công!');
        }
    }
    public function reset()
    {
        return view('admin.setting.reset');
    }
    public function resetUpdate(ResetPassWordRequest $request)
    {
        $admin = Login::find(Auth::user()->idUsers);
        $admin->update(
            [
                'password' => bcrypt($request->password)
            ]
        );
        return redirect()->route('admin.profileadmin')->with('message', 'Mật khẩu đã được cập nhật thành công!');
    }
}
