<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Observers\PostObserver;
use App\Policies\PostPolicy;
use App\Models\Post;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Policy registration
        Gate::policy(Post::class, PostPolicy::class);

        // Gate definition
        Gate::define('manage-users', function ($user) {
            return $user->role === 'admin';
        });

        // Observer registration
        Post::observe(PostObserver::class);
    }
}
