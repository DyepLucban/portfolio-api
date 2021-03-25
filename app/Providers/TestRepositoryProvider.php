<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\TestRepository;
use App\Models\User;

class TestRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TestRepository::class, function() {
            return new TestRepository(new User);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
