<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\NumberOfLike;
use App\Models\Post;
use App\Models\React;
use App\Models\User;
use App\Notifications\RepliedToThread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment(Request $request,Post $post)
    {
        
        $request->mergeIfMissing(['idUsers' => Auth::user()->id]);
        $request->mergeIfMissing(['isActive' => 1]);
       
        if($thread=Comment::create(
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
           
            // $user=User::find(auth()->user()->id);
            // $user->notify(new RepliedToThread($thread));
            return redirect()->back();
         }
    }
    public function update($idComment,Request $request){
        $comment=Comment::find($idComment);
        if($comment->update(
            [
                'content'=>$request->content
            ]
        ))
        {
            return back();
        }
    }
    public function destroy($idComment)
    {
        
        $comment=Comment::find($idComment);
        if($comment->delete()){
            return back();
        }
    }
    public function reply(Request $request){
       
        $request->mergeIfMissing(['idUsers' => Auth::user()->id,'isActive' => 1]);



        if(Comment::create(
            $request-> validate(
                [
                    'content'=>'required',
                    'idUsers' =>'',
                    'isActive'=>'',
                    'idPost'=>'',
                    'parent_id'=>''
                ],
                [
                    'required' => 'Trường này không được bỏ trống !',
                ]
            )
         )){
            return back();    
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
