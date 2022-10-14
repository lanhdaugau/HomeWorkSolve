<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        
        $request->mergeIfMissing(['idUsers' => Auth::user()->id]);
        $request->mergeIfMissing(['isActive' => 1]);
       
        if(Comment::create(
            $request->validate(
                [
                    'content'=>'required',
                    'idUsers' =>'',
                    'isActive'=>'',
                    'idPost'=>'',
                ],
                [
                    'required' => 'Trường này không được bỏ trống !',
                ]
            )
         )){
            return redirect()->back();
         }
    }
}
