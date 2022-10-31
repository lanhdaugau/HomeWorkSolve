<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('edit-post', function ($user,$post) {
            return $user->idUsers==$post->getUser->id;
        });
        Gate::define('edit-comment',function($user,$comment){
            return $user->idUsers==$comment->getUser->id;
        }); 
        Gate::define('admin-view',function($user){
            return $user->role==0;
        });
    }
}
