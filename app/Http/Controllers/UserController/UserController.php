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
            $folderImage = 'uploads/avatar/';
            $allData['avatar'] = $newNameImage;
            $image->move($folderImage, $newNameImage);
        }
        if ($user->update($allData)) {
            return redirect()->back();
        }
    }
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
        return redirect()->back();
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
