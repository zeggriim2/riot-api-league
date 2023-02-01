<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Riot\Match;

use Zeggriim\RiotApiDatadragon\base\BaseApi;
use Zeggriim\RiotApiDatadragon\BuildUrl;
use Zeggriim\RiotApiDatadragon\Enum\Region;
use Zeggriim\RiotApiLeague\Enum\Match\UrlMatch;
use Zeggriim\RiotApiLeague\Enum\Status\UrlStatus;
use Zeggriim\RiotApiLeague\Model\Match\MatchDto;
use Zeggriim\RiotApiLeague\Model\Match\MatchTimeLineDto;
use Zeggriim\RiotApiLeague\Model\Status\PlatformDataDto;
use Zeggriim\RiotApiLeague\Riot\Traits\ApiTrait;

class MatchApi extends BaseApi
{
    use ApiTrait;

    public function __construct(
        private readonly string $platform,
        private readonly string $apiKey
    )
    {
        parent::__construct();
    }

    /**
     * @param string $puuid
     * @return array<array-key,string>
     */
    public function getMatchBySummonerPuuid(string $puuid,int $start = 0,int $count = 20): array
    {
        $url = BuildUrl::build(UrlMatch::URL_MATCH_SUMMONER_PUUID,[
                "region"        => Region::PLATFORM_TO_REGION[$this->platform],
                "puuid"         => $puuid
            ]
        );
        return $this->call($url, query: ["start" => $start, "count" => $count]);
    }

    public function getMatchById(string $id): MatchDto
    {
        $url = BuildUrl::build(UrlMatch::URL_MATCH_ID,[
                "region"        => Region::PLATFORM_TO_REGION[$this->platform],
                "id"         => $id
            ]
        );

        return $this->call($url, type: MatchDto::class);
    }

    public function getMatchTimeLineById(string $id): MatchTimeLineDto
    {
        $url = BuildUrl::build(UrlMatch::URL_MATCH_ID_TIMELINE,[
                "region"        => Region::PLATFORM_TO_REGION[$this->platform],
                "id"         => $id
            ]
        );

        return $this->call($url, type: MatchTimeLineDto::class);
    }
}