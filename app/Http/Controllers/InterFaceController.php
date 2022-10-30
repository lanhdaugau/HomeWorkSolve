<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use App\Models\Post;
use App\Models\React;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;

class InterFaceController extends Controller
{
  public function index(Request $request)
  {
    $search=$request->get('searchPost');
    
    $posts = Post::where('isActive', 1)
    ->where('caption','like', '%' . $search . '%')
    ->orWhere('content','like', '%' . $search . '%')
    ->orderBy('id','DESC')->paginate(3);
  
    return view('users.index',['posts' => $posts]);


  }
  public function search()
  {

    return view('users.search');
  }
  public function apiName(Request $rq)
  {

    return User::where('name', 'like', '%' . $rq->get('q') . '%')
      ->get([
        'id',
        'name',
        'avatar'

      ]);
  }
  public function getUserSearch()
  {
    return DataTables::of(User::query())
      ->addColumn('detail', function (User $object) {
        return route('detail', $object->id);
      })
      ->rawColumns(['detail'])
      ->make(true);
  }
  public function detail($id)
  {
    $user = User::find($id);
    
    
    $posts = Post::where('idUsers', $user->id)
      ->where('isActive', 0)
      ->get();
    $react = React::where('idUsers', $id)->get();


    return view('users.user.profile', ['user' => $user, 'posts' => $posts, 'reacts' => $react]);
  }
}
