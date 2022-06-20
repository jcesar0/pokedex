<?php

namespace App\Services;

use App\Contracts\PokedexContract;
use App\Supports\PokeapiSupport;
use GuzzleHttp\Client;

class PokeapiServices implements PokedexContract
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('pokeapi.BASE_URI')
        ]);
    }


    public function getByName(string $name): array
    {
        $uri = config('pokeapi.SHOW_BY_NAME');

        $response = $this->client->get("$uri/$name");

        $pokemon = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);

        $stats = PokeapiSupport::handleStats($pokemon['stats']);
        $moves = PokeapiSupport::handleMoves($pokemon['moves']);
        $types = PokeapiSupport::handleTypes($pokemon['types']);

        return [
            'id' => $pokemon['id'],
            'name' => $pokemon['name'],
            'image' => $pokemon['sprites']['front_default'],
            'stats' => $stats,
            'types' => $types,
            'moves' => $moves,
            'shiny' => [
                'image' => $pokemon['sprites']['front_shiny']
            ],
        ];
    }

}
