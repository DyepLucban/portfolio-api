<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SkillRepository;
use App\Models\Skill;

class SkillRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SkillRepository::class, function() {
            return new SkillRepository(new Skill);
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
