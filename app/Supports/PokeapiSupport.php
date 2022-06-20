<?php

namespace App\Supports;

class PokeapiSupport
{
    public static function handleStats(array $data): array
    {
        $stats = [];

        foreach ($data as $stat)
        {
            $stats[] = [
                'name' => $stat['stat']['name'],
                'base' => $stat['base_stat']
            ];
        }

        return $stats;
    }

    public static function handleMoves(array $data): array
    {
        $moves = [];

        foreach ($data as $move)
        {
            $moves[] = [
                'name' => $move['move']['name'],
                'url' => $move['move']['url'],
            ];
        }

        return $moves;
    }

    public static function handleTypes(array $data): array
    {
        $types = [];

        foreach ($data as $type)
        {
            $types[] = $type['type']['name'];
        }

        return $types;
    }
}
