<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\UserRequest\UpdateRequest;
use App\Http\Request\AdminRequest\UserRequest\CreateRequest;
use App\Models\Login;
use App\Models\Post;
use App\Models\React;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $users = User::all();
            return Datatables::of($users)
                ->editColumn('role', function ($user) {
                    if ($user->infoLogin->role == 1) {
                        return "<span class='badge badge-pill badge-success'>Member</span>";
                    }
                    return "<span class='badge badge-pill badge-primary'>Admin</span>";
                })
                ->editColumn('email', function ($user) {
                    return $user->infoLogin->email ?? "<span class='badge badge-pill badge-danger'>no email</span>";
                })
                ->editColumn('phone', function ($user) {
                    return $user->infoLogin->phone ?? "<span class='badge badge-pill badge-danger'>no phone</span>";
                })
                ->editColumn('gender', function ($user) {
                    if ($user->gender == 1) {
                        return "<span class='badge badge-pill badge-success'>Male</span>";
                    }
                    return "<span class='badge badge-pill badge-primary'>Female</span>";
                })
                ->editColumn('activated', function ($user) {
                    if ($user->activated == 1) {
                        return "<span class='badge badge-pill badge-success'>Actived</span>";
                    }
                    return "<span class='badge badge-pill badge-danger'>Not Actived</span>";
                })
                ->addColumn('action', function ($user) {
                    $routeDetail = route('admin.show', $user->id);
                    $routeEdit = route('admin.edit', $user->id);
                    $routeDelete = route('admin.destroy', $user->id);
                    $deleteAjax = "deleteAjax('$routeDelete')";
                    $buttonDetail = '<button class="btn btn-sm btn-warning" onclick="window.location.href=\'' . "$routeDetail'\">"
                        . '<i class="fas fa-eye"></i>' . '</button>';
                    $buttonEdit = '<button class="btn btn-sm btn-success" onclick="window.location.href=\'' . "$routeEdit'\">" . '<i class="fas fa-pen-alt"></i>' . '</button>';
                    $buttonDelete = '<button class="btn btn-sm btn-danger btn-delete" onclick="' . "$deleteAjax\">" . ' <i class="fas fa-trash"></i>' . '</button>';
                    $element = '<div class="d-flex justify-content-around" >' . $buttonDetail . $buttonEdit . $buttonDelete . '</div>';
                    return $element;
                })
                ->rawColumns(['gender', 'email', 'phone', 'role', 'activated', 'action'])
                ->make(true);
        }
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $nameAvatar = $avatar->getClientOriginalName();
            $dirFolder = 'uploads/avatar/user/';
            $newAvatar = $dirFolder . time() . '-' . $nameAvatar;
            $dataUser =  $request->except(['email', 'phone', 'isActive', 'password']);
            $dataUser['avatar'] = $newAvatar;
            if ($user = User::create($dataUser)) {
                $avatar->move($dirFolder, $newAvatar);
                $dataLogin = $request->only(['email', 'phone', 'isActive', 'password']);
                $dataLogin['idUser'] = $user->id;
                $dataLogin['role'] = 0; //admin;
                if (Login::create($dataLogin)) {
                    return redirect()->route('admin.create')->with('message', 'User mới đã được tạo thành công!');
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminModel\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $userModel)
    {   
        $reacts= React::where('idUsers',$userModel->id)->get(); 
        $posts= Post::where('idUsers',$userModel->id)->get(); 
        return view('admin.user.detail', compact('userModel','reacts','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminModel\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $userModel)
    {
        return view('admin.user.update', compact('userModel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminModel\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $userModel)
    {
        $dataMerge = $request->validated();
        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $nameAvatar = $avatar->getClientOriginalName();
            $dirFolder = 'uploads/avatar/admin/';
            $newAvatar = $dirFolder . 'admin-' . time() . '-' . $nameAvatar;
            $dataMerge['avatar'] = $newAvatar;
            $avatar->move($dirFolder, $newAvatar);
            @unlink($userModel->avatar);
        }
        if ($userModel->update($dataMerge)) {
            $loginModel = Login::find($userModel->infoLogin->id);
            if ($loginModel->update($request->only('isActive'))) {
                return redirect()->back()->with('message', 'User đã được cập nhật thành công!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminModel\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $userModel)
    {
        if ($userModel->delete()) {
            return response()->json(['statusCode' => 200]);
        } else {
            return response()->json(['statusCode' => 400]);
        }
    }
}
