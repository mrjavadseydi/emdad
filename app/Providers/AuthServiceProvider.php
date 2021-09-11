<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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
        Gate::define("madad_jo", function ($user) {
            return $user->user_type == "مددجو";
        });
        Gate::define("user", function ($user) {
            return $user->role=="user";
        });
        Gate::define("madad_kar", function ($user) {
            return $user->role=="madad_kar";
        });
        Gate::define("employment_boss", function ($user) {
            return $user->role=="employment_boss";
        });
        Gate::define("employment_cons", function ($user) {
            return $user->role=="employment_consultant";
        });
        Gate::define("feasibility", function ($user) {
            return $user->role=="feasibility";
        });
        Gate::define("admin", function ($user) {
            return $user->role=="employment_boss";
        });
        $this->registerPolicies();

        //
    }
}
