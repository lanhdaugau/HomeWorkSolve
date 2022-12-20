<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RatingRequest;
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

        $request->mergeIfMissing(['idUsers' => Auth::user()->idUsers]);
        $request->mergeIfMissing(['isActive' => 1]);

        if ($comment=Comment::create(
            $request->validate(
                [
                    'content' => 'required',
                    'idUsers' => '',
                    'isActive' => '',
                    'idPost' => '',
                ],
                [
                    'required' => 'Nội dung bình luận không được bỏ trống !',
                ]
            )
        )) {
            $idPost = $request->idPost;
            $post = Post::find($idPost);

            if ($post->getUser->id != Auth::user()->idUsers) {
                $post->getUser->notify(new RepliedToThread($post,$comment));
            }

            return redirect()->back();
        }
    }
    public function update($idComment, $content)
    {
    
        $comment = Comment::find($idComment);
     
        if ($comment->update(
            [
                'content' => $content
            ]
        )) {
        
            return response()->json([
                'statusCode' => 200
            ]);
        }
        
    }
    public function destroy($idComment)
    {
       
        $notifications = Notification::where('data->comment->id', $idComment)->get()->pluck('id');
       
        Notification::destroy($notifications);
        $comment = Comment::find($idComment);
        if ($comment->delete()) {
            return response()->json([
                'statusCode' => 200
            ]);
        }
    }
    public function reply(Request $request)
    {

        $request->mergeIfMissing(['idUsers' => Auth::user()->idUsers]);
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
            $comment_parent = Comment::find($comment->parent_id);

            if ($comment->getUser->id != $comment_parent->getUser->id) {
                $comment_parent->getUser->notify(new ReplyToUser($comment_parent, $post));
            }

            if ($post->getUser->id != Auth::user()->idUsers) {
                $post->getUser->notify(new RepliedToThread($post,$comment));
            }

            return back();
        }
    }
    public function rating(RatingRequest $request)
    {


        $request->mergeIfMissing(['idAuthur' => Auth::user()->idUsers]);
        if (React::create(
            $request->all()
        )) {
            $userIsRating = User::find($request->idUsers);
            $userIsRating->notify(new RatingToUser());
            return redirect()->back();
        }
    }
    public function like($idComment)
    {
        $comment = Comment::find($idComment);
        $like = NumberOfLike::where('idUsers', Auth::user()->idUsers)
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
                    'idUsers' => Auth::user()->idUsers,
                    'idComment' => $idComment,
                ]
            )) {
                $post = Post::find($comment->idPost);
                if ($comment->getUser->id != Auth::user()->idUsers) {
                    $comment->getUser->notify(new LikeToPost($comment, $like, $post));
                }

                return response()->json([
                    'statusCode' => 200
                ]);
            }
        }
    }
}
