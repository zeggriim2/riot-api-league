<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Riot\Challenges;

use Zeggriim\RiotApiDatadragon\base\BaseApi;
use Zeggriim\RiotApiDatadragon\BuildUrl;
use Zeggriim\RiotApiLeague\Enum\Challenges\UrlChallenges;
use Zeggriim\RiotApiLeague\Model\Challenges\ChallengeConfigInfoDto;
use Zeggriim\RiotApiLeague\Model\Challenges\PlayerInfoDto;
use Zeggriim\RiotApiLeague\Riot\Traits\ApiTrait;

class ChallengesApi extends BaseApi
{
    use ApiTrait;

    public function __construct(
        private readonly string $platform,
        private readonly string $apiKey
    ) {
        parent::__construct();
    }

    /**
     * @return array<array-key,ChallengeConfigInfoDto>
     */
    public function getChallengesConfig(): array
    {
        $url = BuildUrl::build(
            UrlChallenges::URL_CHALLENGES_CONFIG,
            [
                'platform'      => $this->platform,
            ]
        );

        return $this->call($url, type: ChallengeConfigInfoDto::class, isArray: true);
    }

    public function getChallengesPercentiles()
    {
        $url = BuildUrl::build(
            UrlChallenges::URL_CHALLENGES_PERCENTILES,
            [
                'platform'      => $this->platform,
            ]
        );

        return $this->call($url);
    }

    public function getChallengesByChallengeId(int|string $challengeId): ChallengeConfigInfoDto
    {
        $url = BuildUrl::build(
            UrlChallenges::URL_CHALLENGES_CHALLENGE_ID,
            [
                "platform"      => $this->platform,
                "challengeId"   => (string)$challengeId,
            ]
        );

        return $this->call($url, type: ChallengeConfigInfoDto::class);
    }

    public function getChallengesPercentileByChallengeId(int|string $challengeId)
    {
        $url = BuildUrl::build(
            UrlChallenges::URL_CHALLENGES_PERCENTILES_SUMMONER_ID,
            [
                "platform"      => $this->platform,
                "challengeId"   => (string)$challengeId,
            ]
        );

        return $this->call($url);
    }

    public function getChallengesPlayerData(string $puuid): PlayerInfoDto
    {
        $url = BuildUrl::build(
            UrlChallenges::URL_CHALLENGES_PLAYER_DATA,
            [
                "platform"      => $this->platform,
                "puuid"   => $puuid,
            ]
        );

        return $this->call($url, type: PlayerInfoDto::class);
    }
}
