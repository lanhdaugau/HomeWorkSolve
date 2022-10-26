<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\ImagePost;
use App\Models\NumberOfLike;
use App\Models\Post;
use App\Models\React;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile()
    {
        $user = User::find(Auth::user()->id);

        $posts = Post::where('userID', $user->id)
            ->where('isActive', 0)
            ->get();
            $react=React::where('idUsers',Auth::user()->id)->get();
        return view('users.user.profile', ['user' => $user, 'posts' => $posts,'reacts'=>$react]);
    }
    public function addPost()
    {
        return view('users.post.addPost');
    }
    public function setting()
    {
        $user = DB::table('users')
            ->join('login', 'users.id', '=', 'login.idUsers')
            ->select('users.*', 'login.*')
            ->where('users.id', Auth::user()->id)
            ->first();


        return view('users.user.setting', ['user' => $user]);
    }
    public function update(Request $request)
    {

        $user = User::find(Auth::user()->id);
      
        $allData = $request->all();
        if ($request->has('avatar')) {

            $image = $request->avatar;
            $extension = $request->file('avatar')->extension();
            $name = $user->id;
            $newNameImage = $name . '.' . $extension;
            $folderImage = 'storage/users-avatar/';
            $allData['avatar'] = $newNameImage;
            $image->move($folderImage, $newNameImage);
        }
        if ($user->update($allData)) {
            return redirect()->back();
        }
    }

   
}
