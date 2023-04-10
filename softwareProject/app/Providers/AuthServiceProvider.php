<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
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

        // defining gate rules

        // gate for admin welcome
        Gate::define('view-admin-welcome', function ($user) {
            return $user->hasRole('admin');
        });

        // gate for admin forum
        Gate::define('view-admin-forum', function ($user) {
            return $user->hasRole('admin');
        });

        // gate for admin create
        Gate::define('view-admin-create', function ($user) {
            return $user->hasRole('admin');
        });
    }
}
