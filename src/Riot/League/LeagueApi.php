<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Riot\League;

use Zeggriim\RiotApiDatadragon\base\BaseApi;
use Zeggriim\RiotApiDatadragon\BuildUrl;
use Zeggriim\RiotApiDatadragon\Serializer\Denormalizer;
use Zeggriim\RiotApiLeague\Enum\League\UrlLeague;
use Zeggriim\RiotApiLeague\Model\League;

class LeagueApi extends BaseApi
{
    public function __construct(
        private readonly string $platform,
        private readonly string $apiKey
    )
    {
        parent::__construct();
    }

    /**
     * @param string $queue
     * @param string $tier
     * @param string $division
     * @return array<array-key,League>
     */
    public function getLeague(string $queue, string $tier, string $division): array
    {
        $url = BuildUrl::build(UrlLeague::URL_LEAGUE_GENERAL,[
                'platform'  => $this->platform,
                'queue'     => $queue,
                'tier'      => $tier,
                'division'  => $division,
            ]
        );

        return $this->call($url, League::class);
    }

    public function getLeagueBySummonerId(string $summonerId): array
    {
        $url = BuildUrl::build(UrlLeague::URL_LEAGUE_SUMMONER_ID,[
                'platform'      => $this->platform,
                'summonerId'    => $summonerId
            ]
        );

        return $this->call($url, League::class);
    }

    private function call(string $url, $type)
    {
        $options = [
            "headers" => [
                "X-Riot-Token" => $this->apiKey
            ]
        ];
        $datas = $this->makeCall($url, options: $options);

        $objetArray = [];
        $denormalize = new Denormalizer();

        foreach ($datas as $data){
            $objetArray[] = $denormalize->denormalize($data, $type);
        }
        return $objetArray;
    }
}