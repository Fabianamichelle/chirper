<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Chirp;
use App\Policies\ChirpPolicy;

class AuthServiceProvider extends ServiceProvider
{

    /**
 * The model to policy mappings for the application.
 *
 * @var array<class-string, class-string> 
 */
    protected $policies = [
        Chirp::class => ChirpPolicy::class,
    ];
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
