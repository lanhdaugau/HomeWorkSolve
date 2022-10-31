<?php

namespace App\Http\View\Composer;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class UserComposer
{

        public function compose(View $view)
        {
                
                if (Auth::check()) {
                      
                                                $user = User::find(Auth::user()->idUsers);
  
                $view->with(['avatar' => $user->getAvatar(), 'userNotification' => $user]);
                } 
                
        }
}
