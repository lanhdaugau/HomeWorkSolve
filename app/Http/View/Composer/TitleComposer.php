<?php

namespace App\Http\View\Composer;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class TitleComposer
{
    public function compose(View $view)
    {
        $arrPrefix = explode('/', request()->route()->getPrefix());
        $arrPrefix = array_values(array_diff($arrPrefix, ["", "admin"]));
        $title = ucfirst($arrPrefix[0] ?? 'Dashboard');
        $view->with('title', $title);
        
    }
}
