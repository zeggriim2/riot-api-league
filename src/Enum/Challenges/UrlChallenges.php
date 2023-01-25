<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Enum\Challenges;

class UrlChallenges
{
    private const URL_BASE = "https://{platform}.api.riotgames.com";
    private const URL_CHALLENGES = self::URL_BASE . "/lol/challenges/v1/challenges";
    public const URL_CHALLENGES_CONFIG = self::URL_CHALLENGES . "/config";
    public const URL_CHALLENGES_PERCENTILES = self::URL_CHALLENGES . "/percentiles";
    public const URL_CHALLENGES_CHALLENGE_ID = self::URL_CHALLENGES . "/{challengeId}/config";
    public const URL_CHALLENGES_PERCENTILES_SUMMONER_ID = self::URL_CHALLENGES . "/{challengeId}/percentiles";
    public const URL_CHALLENGES_PLAYER_DATA
        = self::URL_BASE . "/lol/challenges/v1/player-data/{puuid}";
}