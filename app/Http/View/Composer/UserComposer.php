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

                        $view->with(['avatar', $user->avatar, 'userNotification', $user]);
                }
        }
}
