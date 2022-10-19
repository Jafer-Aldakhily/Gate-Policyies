<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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

        Gate::define('user', function ($user) {
            return $user->role == 'user';
        });

        Gate::define('manager', function ($user) {
            return $user->role == 'manager';
        });

        Gate::define('admin', function ($user) {
            return $user->role == 'admin';
        });


        Blade::if('jafer', function () {
            return request()->user()->role == "admin";
        });
    }
}
