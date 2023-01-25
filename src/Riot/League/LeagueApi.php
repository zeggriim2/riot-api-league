<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Riot\League;

use Zeggriim\RiotApiDatadragon\base\BaseApi;
use Zeggriim\RiotApiDatadragon\BuildUrl;
use Zeggriim\RiotApiDatadragon\Serializer\Denormalizer;
use Zeggriim\RiotApiLeague\Enum\League\UrlLeague;
use Zeggriim\RiotApiLeague\Model\League\LeagueDto;
use Zeggriim\RiotApiLeague\Model\League\LeagueListDto;

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
     * @return array<array-key,LeagueDto>
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

        return $this->call($url, LeagueDto::class, isArray: true);
    }

    /**
     * @param string $summonerId
     * @return array<array-key, LeagueDto>
     */
    public function getLeagueBySummonerId(string $summonerId): array
    {
        $url = BuildUrl::build(UrlLeague::URL_LEAGUE_SUMMONER_ID,[
                'platform'      => $this->platform,
                'summonerId'    => $summonerId
            ]
        );

        return $this->call($url, LeagueDto::class, isArray: true);
    }

    public function getLeagueByLeagueId(string $leagueId): LeagueListDto
    {
        $url = BuildUrl::build(UrlLeague::URL_LEAGUE_LEAGUE_ID,[
                'platform'      => $this->platform,
                'leagueId'    => $leagueId
            ]
        );

        return $this->call($url,LeagueListDto::class);
    }

    public function getLeagueChallenger(string $queue): LeagueListDto
    {
        $url = BuildUrl::build(UrlLeague::URL_LEAGUE_CHALLENGER,[
                'platform'      => $this->platform,
                'queue'    => $queue
            ]
        );
        return $this->call($url,LeagueListDto::class);
    }

    public function getGrandMaster(string $queue): LeagueListDto
    {
        $url = BuildUrl::build(UrlLeague::URL_LEAGUE_GRANDMASTER,[
                'platform'      => $this->platform,
                'queue'    => $queue
            ]
        );
        return $this->call($url,LeagueListDto::class);
    }

    public function getMaster(string $queue): LeagueListDto
    {
        $url = BuildUrl::build(UrlLeague::URL_LEAGUE_MASTER,[
                'platform'      => $this->platform,
                'queue'    => $queue
            ]
        );
        return $this->call($url,LeagueListDto::class);
    }

    private function call(string $url, $type,bool $isArray = false, ?string $keySearch = null)
    {
        $options = $this->headerToken();

        $datas = $this->makeCall($url, options: $options);

        if($keySearch){
            $datas = $datas[$keySearch];
        }


        $denormalize = new Denormalizer();

        if($isArray){
            $objetArray = [];
            foreach ($datas as $data){
                $objetArray[] = $denormalize->denormalize($data, $type);
            }
            return $objetArray;
        }else{
            return $denormalize->denormalize($datas, $type);
        }
    }

    private function headerToken()
    {
        return [
            "headers" => [
                "X-Riot-Token" => $this->apiKey
            ]
        ];
    }
}