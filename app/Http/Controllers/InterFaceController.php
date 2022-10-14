<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\React;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class InterFaceController extends Controller
{
  public function index()
  {

    $posts = Post::where('isActive', 1)
      ->get();

    return view('users.index', ['posts' => $posts]);
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
        'name'
      ]);
  }
  public function getUser()
    {
        return DataTables::of(User::query())
        ->addColumn('detail',function($object){
            return route('detail',$object);
        })
        ->rawColumns(['detail'])
        ->make(true);
    }
    public function detail($id){
      $user = User::find($id);

      $posts = Post::where('userID', $user->id)
          ->where('isActive', 0)
          ->get();
      $react=React::where('idUsers',$id)->get();
      
      
      return view('users.user.profile', ['user' => $user, 'posts' => $posts,'reacts'=>$react]);
    }
}
