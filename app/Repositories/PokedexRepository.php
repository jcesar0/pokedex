<?php

namespace App\Repositories;

use App\Contracts\PokedexContract;

class PokedexRepository
{
    private PokedexContract $pokedexProvider;

    public function __construct(PokedexContract $pokedexProvider)
    {
        $this->pokedexProvider = $pokedexProvider;
    }

    public function show($name)
    {
        return $this->pokedexProvider->getByName($name);
    }
}
