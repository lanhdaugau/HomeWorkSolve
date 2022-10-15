<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\NumberOfLike;
use App\Models\React;
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
    public function rating(Request $request){
        $request->mergeIfMissing(['idAuthur'=>Auth::user()->id]);
        if(React::create(
            $request->all()
        )){
            return redirect()->back();
        }
    }
    public function like($idComment){
        
        $like=NumberOfLike::where('idUsers',Auth::user()->id)
        ->where('idComment',$idComment)
        ->first();
        
        if($like!=null){
            if(NumberOfLike::destroy($like->id)){
                return redirect()->back();
            }
        }
        else{
            
            if(NumberOfLike::create(
                [
                    'idUsers'=>Auth::user()->id,
                    'idComment'=> $idComment,
                ]
                )){
                    return redirect()->back();
                }
                
        }
       
    }
}
