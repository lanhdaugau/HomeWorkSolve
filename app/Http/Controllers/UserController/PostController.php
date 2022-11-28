<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\PostRequest;
use App\Models\Comment;
use App\Models\ImagePost;
use App\Models\Notification;
use App\Models\NumberOfLike;
use App\Models\Post;
use App\Models\User;
use App\Notifications\RepliedToThread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function post(PostRequest $request)
    {

        $slug = Str::slug($request->caption, '-') . '-' . time();

        if ($request->button == 'publish') {
            $request->mergeIfMissing(['idUsers' => Auth::user()->idUsers, 'isActive' => 1, 'slug' => $slug]);
        }

        $request->mergeIfMissing(['idUsers' => Auth::user()->idUsers, 'slug' => $slug]);

        $post = Post::create(
            $request->all()
        );

        foreach ($request->file('images') as $image) {

            $extension = $image->extension();

            $name = 'ID-' . $post->id . '-' .  $image->getClientOriginalName();
            $newNameImage = $name . '.' . $extension;
            $folderImage = 'uploads/post/';
            if (ImagePost::create(
                [
                    'idPost' => $post->id,
                    'path_image' => $newNameImage,
                ]
            )) {
                $image->move($folderImage, $newNameImage);
            }
        }
        return redirect()->route('user.index');
    }
    public function detail($slug, $idNotification = null)
    {

        if ($idNotification != null) {
            
           $notification= Notification::find($idNotification);
            if($notification){
                $notification->update(
                    ['read_at' => now()]
                );
            }
           
            
        }

        
            $post = Post::whereSlug($slug)

                ->with([
                    'getUser',
                    'comments.getUser',
                    'comments.replies.getUser',
                    'comments.replies.replies',
                    'comments.replies.replies.getUser',
                    'comments.replies.replies.replies.getUser',
                ])

                ->first();
            if($post==null)
            {
                return view('errors.404');
            }
            $user = User::find(Auth::user()->idUsers);



            return view('users.post.detail', ['post' => $post, 'user' => $user]);
       
    }
    public function editPost($idPost)
    {
        $posts = Post::find($idPost);


        return view('users.post.editPost', ['post' => $posts]);
    }


    public function updatePost(Request $request, $idPost)
    {

        $post = Post::find($idPost);
        $post->update([
            'caption' => $request->caption,
            'content' => $request->content,
        ]);

        ImagePost::destroy($request->image);
        if ($request->file('images')) {
            foreach ($request->file('images') as $image) {

                $extension = $image->extension();

                $name = 'ID-' . $post->id . '-' .  $image->getClientOriginalName();
                $newNameImage = $name . '.' . $extension;
                $folderImage = 'uploads/post/';
                if (ImagePost::create(
                    [
                        'idPost' => $post->id,
                        'path_image' => $newNameImage,
                    ]
                )) {
                    $image->move($folderImage, $newNameImage);
                }
            }
        }

        return redirect()->route('post.detail',$post->slug)->with('message','Chỉnh sửa bài viết thành công');
    }

    public function destroy($id)
    {
        
        $notifications = Notification::where('data->post->id',$id)->get()->pluck('id');
        Notification::destroy($notifications);
        $image = ImagePost::where('idPost', $id)->pluck('id');
        $image_path = ImagePost::where('idPost', $id)->pluck('path_image');
        foreach ($image_path as $item) {
            unlink('uploads/post/' . $item);
        }
        $comment = Comment::where('idPost', $id)->pluck('id');

        $like = NumberOfLike::whereIn('idComment', $comment)->get('id');
        NumberOfLike::destroy($like);
        ImagePost::destroy($image);
        Comment::destroy($comment);
        
        Post::destroy($id);

        return response()->json([
            'statusCode' => 200
        ]);
    }
    public function publish($idPost)
    {
        $post = Post::find($idPost);
        $post->update(
            [
                'isActive' => 1
            ]

        );
        return redirect()->back();
    }
}
