<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerCustomPolicies();
        //
    }
    /**
     * Registering custom access rules.
     *
     * @return void
     */
    private function registerCustomPolicies()
    {
        Gate::define('manage-company', function ($user) {
            return $user->hasAccess(['manage-company']);
        });
        Gate::define('manage-job', function ($user) {
            return $user->hasAccess(['manage-job']);
        });
        Gate::define('manage-degree', function ($user) {
            return $user->hasAccess(['manage-degree']);
        });
        Gate::define('manage-major', function ($user) {
            return $user->hasAccess(['manage-major']);
        });
        Gate::define('manage-individual', function ($user) {
            return $user->hasAccess(['manage-individual']);
        });
    }
}
