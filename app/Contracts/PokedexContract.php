<?php

namespace App\Contracts;

interface PokedexContract
{
    public function getByName(string $name): array;
}
