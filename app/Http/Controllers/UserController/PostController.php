<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\ImagePost;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function post(Request $request)
    {


        if ($request->button == 'publish') {
            $request->mergeIfMissing(['isActive' => 1]);
        }
        $request->mergeIfMissing(['userID' => Auth::user()->id]);
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
    public function detail($idPost)
    {
        if(Auth::check()){
        $comment= Comment::where('idPost',$idPost)->get();
            
       
        
        $user = User::find(Auth::user()->id);
        
        $posts = Post::find($idPost);
     
        return view('users.post.detail', ['user' => $user, 'post' => $posts,'comments'=>$comment]);
        }
        else{
            return redirect()->route('login.login');
        }
        
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

    public function destroy($id)
    {
        $image = ImagePost::where('idPost', $id)->pluck('id');
        $comment= Comment::where('idPost',$id)->pluck('id');
        if (ImagePost::destroy($image) && Comment::destroy($comment)) {
            Post::destroy($id);
               
            return response()->json([
                'statusCode' => 200
            ]);
        }
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
