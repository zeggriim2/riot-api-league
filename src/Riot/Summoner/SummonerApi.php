<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Riot\Summoner;

use Zeggriim\RiotApiDatadragon\base\BaseApi;
use Zeggriim\RiotApiDatadragon\BuildUrl;
use Zeggriim\RiotApiDatadragon\Serializer\Denormalizer;
use Zeggriim\RiotApiLeague\Enum\Summoner\UrlSummoner;
use Zeggriim\RiotApiLeague\Model\Summoner;

class SummonerApi extends BaseApi
{
    public function __construct(
        private readonly string $platform,
        private readonly string $apiKey
    )
    {
        parent::__construct();
    }

    public function getSummonerByName(string $name): Summoner
    {
        $url = BuildUrl::build(UrlSummoner::URL_SUMMONER_BY_NAME,[
                'platform' => $this->platform,
                'name' => strtolower($name)
            ]
        );

        return $this->call($url, Summoner::class);
    }

    public function getSummonerByAccount(string $accountId)
    {
        $url = BuildUrl::build(UrlSummoner::URL_SUMMONER_BY_ACCOUNT_ID,[
                'platform' => $this->platform,
                'accountId' => $accountId
            ]
        );

        return $this->call($url, Summoner::class);
    }

    public function getSummonerByPuuid(string $puuid)
    {
        $url = BuildUrl::build(UrlSummoner::URL_SUMMONER_BY_PUUID,[
                'platform' => $this->platform,
                'puuid' => $puuid
            ]
        );

        return $this->call($url, Summoner::class);
    }

    public function getSummonerBySummonerId(string $summonerId)
    {
        $url = BuildUrl::build(UrlSummoner::URL_SUMMONER_BY_SUMMONER_ID,[
                'platform' => $this->platform,
                'summonerId' => $summonerId
            ]
        );

        return $this->call($url, Summoner::class);
    }

    private function call(string $url, $type)
    {
        $options = [
            "headers" => [
                "X-Riot-Token" => $this->apiKey
            ]
        ];
        $data = $this->makeCall($url, options: $options);

        $denormalize = new Denormalizer();

        return $denormalize->denormalize($data, $type);
    }
}