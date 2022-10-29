<?php

namespace App\Http\View\Composer;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserComposer
{

        public function compose(View $view)
        {       
                if (Auth::check()) {
                        $user = User::find(Auth::user()->id);
<<<<<<< HEAD
                        $view->with(['avatar'=> $user->avatar,'userNotification'=> $user]);
                                
                }
                else{
                        $view->with('userNotification',null);
=======

                        $view->with(['avatar', $user->avatar, 'userNotification', $user]);
>>>>>>> 31ee70a9a4fad89bcff97151d52c6513f10eaaff
                }
        }
}
