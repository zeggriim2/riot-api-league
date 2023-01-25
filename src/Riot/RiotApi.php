<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Riot;

use Zeggriim\RiotApiLeague\Riot\Challenges\ChallengesApi;
use Zeggriim\RiotApiLeague\Riot\ChampionMastery\ChampionMastery;
use Zeggriim\RiotApiLeague\Riot\League\LeagueApi;
use Zeggriim\RiotApiLeague\Riot\Status\StatusApi;
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

    public function getStatus(): StatusApi
    {
        return new StatusApi(
            $this->platform,
            $this->apiKey
        );
    }


    public function getChampionMastery(): ChampionMastery
    {
        return new ChampionMastery(
            $this->platform,
            $this->apiKey
        );
    }

    public function getChallenges(): ChallengesApi
    {
        return new ChallengesApi(
            $this->platform,
            $this->apiKey
        );
    }
}