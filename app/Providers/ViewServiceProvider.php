<?php

namespace App\Providers;

use App\Http\View\Composer\TitleComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composer\UserComposer;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('users.layout.header', UserComposer::class);
        View::composer(['admin.layout.main', 'admin.layout.sidebar'], TitleComposer::class);
    }
}
