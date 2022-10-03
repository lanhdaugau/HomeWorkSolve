<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        return view('users.user.profile');
    }
    public function addPost()
    {
        return view('users.post.addPost');
    }
    public function setting()
    {
        $user = (Auth::user());
        return view('users.user.setting', ['user' => $user]);
    }
    public function update(Request $request)
    {

        $user = User::find(Auth::user()->id);

        if ($request->has('avatar')) {

            $image = $request->avatar;
            $extension = $request->file('avatar')->extension();
            $name = $user->id;
            $newNameImage = $name . '.' . $extension;
            
           
          
            $folderImage = 'uploads/avatar/';
          
            $allData = $request->all();
            $allData['avatar'] = $newNameImage;
            $image->move($folderImage, $newNameImage);
    
        }
        if($user->update($allData)){
            return view('users.user.setting');
        }
    }
}
