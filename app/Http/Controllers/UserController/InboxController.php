<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\ContentInbox;
use App\Models\Inbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InboxController extends Controller
{
    public function send(Request $request)
    {
        dd($request);
        // $request->mergeIfMissing(['idUser1' => Auth::user()->id]);
        // $inbox = Inbox::create(
        //     $request->all()
        // );
        // $request->mergeIfMissing(['idInbox' => $inbox->id]);
        // if (ContentInbox::create($request->all())) {
        //     return redirect()->back();
        // }
    }
}
