<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Riot\Summoner;

use Zeggriim\RiotApiDatadragon\base\BaseApi;
use Zeggriim\RiotApiDatadragon\BuildUrl;
use Zeggriim\RiotApiLeague\Enum\Summoner\UrlSummoner;
use Zeggriim\RiotApiLeague\Model\Summoner\SummonerDto;
use Zeggriim\RiotApiLeague\Riot\Traits\ApiTrait;

class SummonerApi extends BaseApi
{
    use ApiTrait;

    public function __construct(
        private readonly string $platform,
        private readonly string $apiKey
    ) {
        parent::__construct();
    }

    public function getSummonerByName(string $name): SummonerDto
    {
        $url = BuildUrl::build(
            UrlSummoner::URL_SUMMONER_BY_NAME,
            [
                'platform' => $this->platform,
                'name' => mb_strtolower($name),
            ]
        );

        return $this->call($url, type: SummonerDto::class);
    }

    public function getSummonerByAccount(string $accountId)
    {
        $url = BuildUrl::build(
            UrlSummoner::URL_SUMMONER_BY_ACCOUNT_ID,
            [
                'platform' => $this->platform,
                'accountId' => $accountId,
            ]
        );

        return $this->call($url, type: SummonerDto::class);
    }

    public function getSummonerByPuuid(string $puuid)
    {
        $url = BuildUrl::build(
            UrlSummoner::URL_SUMMONER_BY_PUUID,
            [
                'platform' => $this->platform,
                'puuid' => $puuid,
            ]
        );

        return $this->call($url, type: SummonerDto::class);
    }

    public function getSummonerBySummonerId(string $summonerId)
    {
        $url = BuildUrl::build(
            UrlSummoner::URL_SUMMONER_BY_SUMMONER_ID,
            [
                'platform' => $this->platform,
                'summonerId' => $summonerId,
            ]
        );

        return $this->call($url, type: SummonerDto::class);
    }
}
