<?php

namespace App\Providers;

use App\Models\ChargeStation;
use App\Policies\ChargeStationPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    protected $policies = [
    ChargeStation::class => ChargeStationPolicy::class,
    ];
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       $this->registerPolicies();
    }
}
