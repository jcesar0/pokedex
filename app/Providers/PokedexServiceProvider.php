<?php

namespace App\Providers;

use App\Contracts\PokedexContract;
use App\Services\PokeapiServices;
use Illuminate\Support\ServiceProvider;

class PokedexServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(PokedexContract::class, PokeapiServices::class);
    }

    public function boot(): void
    {
    }
}
