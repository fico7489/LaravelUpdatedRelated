<?php

namespace Fico7489\Laravel\UpdatedRelated\Tests;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations/');
    }
}