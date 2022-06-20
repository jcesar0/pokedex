<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Repositories\PokedexRepository;
use Symfony\Component\HttpFoundation\Response as StatusCode;

class PokemonController extends Controller
{
    private PokedexRepository $pokedexRepository;

    public function __construct(PokedexRepository $pokedexRepository)
    {
        $this->pokedexRepository = $pokedexRepository;
    }

    public function show($name)
    {
        try {
            return $this->pokedexRepository->show($name);
        } catch (\Exception $exception) {
            return response()->json(['error' => 'could not find the given pokemon'], StatusCode::HTTP_INTERNAL_SERVER_ERROR);
        }

    }
}
