<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Riot\League;

use Zeggriim\RiotApiDatadragon\base\BaseApi;
use Zeggriim\RiotApiDatadragon\BuildUrl;
use Zeggriim\RiotApiLeague\Enum\League\UrlLeague;
use Zeggriim\RiotApiLeague\Model\League\LeagueDto;
use Zeggriim\RiotApiLeague\Model\League\LeagueListDto;
use Zeggriim\RiotApiLeague\Riot\Traits\ApiTrait;

class LeagueApi extends BaseApi
{
    use ApiTrait;

    public function __construct(
        private readonly string $platform,
        private readonly string $apiKey
    ) {
        parent::__construct();
    }

    /**
     * @param string $queue
     * @param string $tier
     * @param string $division
     * @param int $page
     * @return array<array-key,LeagueDto>
     */
    public function getLeague(string $queue, string $tier, string $division, int $page = 1): array
    {
        $url = BuildUrl::build(
            UrlLeague::URL_LEAGUE_GENERAL,
            [
                'platform'  => $this->platform,
                'queue'     => $queue,
                'tier'      => $tier,
                'division'  => $division,
            ]
        );

        return $this->call($url, query: ['page' => $page], type: LeagueDto::class, isArray: true);
    }

    /**
     * @param string $summonerId
     * @return array<array-key, LeagueDto>
     */
    public function getLeagueBySummonerId(string $summonerId): array
    {
        $url = BuildUrl::build(
            UrlLeague::URL_LEAGUE_SUMMONER_ID,
            [
                'platform'      => $this->platform,
                'summonerId'    => $summonerId,
            ]
        );

        return $this->call($url, type: LeagueDto::class, isArray: true);
    }

    public function getLeagueByLeagueId(string $leagueId): LeagueListDto
    {
        $url = BuildUrl::build(
            UrlLeague::URL_LEAGUE_LEAGUE_ID,
            [
                'platform'      => $this->platform,
                'leagueId'    => $leagueId,
            ]
        );

        return $this->call($url, type: LeagueListDto::class);
    }

    public function getLeagueChallenger(string $queue): LeagueListDto
    {
        $url = BuildUrl::build(
            UrlLeague::URL_LEAGUE_CHALLENGER,
            [
                'platform'      => $this->platform,
                'queue'    => $queue,
            ]
        );
        return $this->call($url, type: LeagueListDto::class);
    }

    public function getGrandMaster(string $queue): LeagueListDto
    {
        $url = BuildUrl::build(
            UrlLeague::URL_LEAGUE_GRANDMASTER,
            [
                'platform'      => $this->platform,
                'queue'    => $queue,
            ]
        );
        return $this->call($url, type: LeagueListDto::class);
    }

    public function getMaster(string $queue): LeagueListDto
    {
        $url = BuildUrl::build(
            UrlLeague::URL_LEAGUE_MASTER,
            [
                'platform'      => $this->platform,
                'queue'    => $queue,
            ]
        );
        return $this->call($url, type: LeagueListDto::class);
    }
}
