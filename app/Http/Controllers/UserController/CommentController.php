<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Notification;
use App\Models\NumberOfLike;
use App\Models\Post;
use App\Models\React;
use App\Models\User;
use App\Notifications\LikeToPost;
use App\Notifications\RatingToUser;
use App\Notifications\RepliedToThread;
use App\Notifications\ReplyToUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment(Request $request)
    {

        $request->mergeIfMissing(['idUsers' => Auth::user()->id]);
        $request->mergeIfMissing(['isActive' => 1]);

        if (Comment::create(
            $request->validate(
                [
                    'content' => 'required',
                    'idUsers' => '',
                    'isActive' => '',
                    'idPost' => '',
                ],
                [
                    'required' => 'Trường này không được bỏ trống !',
                ]
            )
        )) {
            $idPost = $request->idPost;
            $post = Post::find($idPost);

            if ($post->getUser->id != Auth::user()->id) {
                $post->getUser->notify(new RepliedToThread($post));
            }

            return redirect()->back();
        }
    }
    public function update($idComment, Request $request)
    {
        $comment = Comment::find($idComment);
        if ($comment->update(
            [
                'content' => $request->content
            ]
        )) {
            return back();
        }
    }
    public function destroy($idComment)
    {


        $comment = Comment::find($idComment);
        if ($comment->delete()) {
            return response()->json([
                'statusCode' => 200
            ]);
        }
    }
    public function reply(Request $request)
    {

        $request->mergeIfMissing(['idUsers' => Auth::user()->id, 'isActive' => 1]);
        if ($comment = Comment::create(
            $request->validate(
                [
                    'content' => 'required',
                    'idUsers' => '',
                    'isActive' => '',
                    'idPost' => '',
                    'parent_id' => ''
                ],
                [
                    'required' => 'Trường này không được bỏ trống !',
                ]
            )
        )) {

            $post = Post::find($request->idPost);
            $comment_parent=Comment::find($comment->parent_id);
            
            if($comment->getUser->id != $comment_parent->getUser->id){
                $comment_parent->getUser->notify(new ReplyToUser($comment_parent, $post));
            }
            
            if ($post->getUser->id != Auth::user()->id) {
                $post->getUser->notify(new RepliedToThread($post));
            }

            return back();
        }
    }
    public function rating(Request $request)
    {
        
        $request->mergeIfMissing(['idAuthur' => Auth::user()->id]);
        if (React::create(
            $request->all()
        )) {
            $userIsRating=User::find($request->idUsers);
            $userIsRating->notify(new RatingToUser());
            return redirect()->back();
        }
    }
    public function like($idComment)
    {
        $comment = Comment::find($idComment);


        $like = NumberOfLike::where('idUsers', Auth::user()->id)
            ->where('idComment', $idComment)
            ->first();
        $notifications = Notification::where('type', 'App\Notifications\LikeToPost')->get();


        if ($like != null) {
            foreach ($notifications as $notification) {
                if (json_decode($notification->data)->like->id === $like->id) {
                    $notification::destroy($notification->id);
                    break;
                }
            }
            if (NumberOfLike::destroy($like->id)) {


                return response()->json([
                    'statusCode' => 400
                ]);
            }
        } else {

            if ($like = NumberOfLike::create(
                [
                    'idUsers' => Auth::user()->id,
                    'idComment' => $idComment,
                ]
            )) {
                $post = Post::find($comment->idPost);
                if ($comment->getUser->id != Auth::user()->id) {
                    $comment->getUser->notify(new LikeToPost($comment, $like, $post));
                }

                return response()->json([
                    'statusCode' => 200
                ]);
            }
        }
    }
}
