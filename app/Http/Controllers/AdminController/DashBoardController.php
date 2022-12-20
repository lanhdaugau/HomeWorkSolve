<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController\ContactAdminController;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\ContactContent;
use App\Models\Post;
use App\Models\React;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idUserContact = null)
    {
        $userContact = null;
        $contenLast = ContactContent::whereNot('idAuthur', 1)->orderBy('created_at', 'DESC')->first();
        if ($contenLast) {
            $userContact = Contact::where('idUsers', $contenLast->idAuthur)->first();
        }



        if ($idUserContact) {
            $userContact = Contact::find($idUserContact);
            $contentInbox = ContactContent::where('idAuthur', $userContact->idUsers)->get();
            foreach ($contentInbox as $content) {

                $content->update(
                    [
                        'seen' => true
                    ]
                );
            }
        }
        $posts = Post::all();
        $users = User::all();
        $reacts = React::all();
        $comments = Comment::all();
        $contacts = Contact::orderBy('id', 'DESC')->get();
        $report = Report::orderBy('id', 'DESC')->get();
        return view('admin.dashboard.index', ['contacts' => $contacts, 'userContact' => $userContact, 'reports' => $report, 'posts' => $posts, 'users' => $users, 'reacts' => $reacts, 'comments' => $comments]);
    }
    public function send($idUserContact, Request $request)
    {

        $saveContent = new ContactAdminController();
        $saveContent->saveMessage($request->content, $idUserContact);
        return back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
