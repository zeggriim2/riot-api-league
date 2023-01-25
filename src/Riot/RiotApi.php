<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Riot;

use Zeggriim\RiotApiLeague\Riot\League\LeagueApi;
use Zeggriim\RiotApiLeague\Riot\Summoner\SummonerApi;

class RiotApi
{
    public function __construct(
        private readonly string $platform,
        private readonly string $apiKey
    ) {

    }

    public function getSummoner(): SummonerApi
    {
        return new SummonerApi(
            $this->platform,
            $this->apiKey
        );
    }

    public function getLeague(): LeagueApi
    {
        return new LeagueApi(
            $this->platform,
            $this->apiKey
        );
    }
}