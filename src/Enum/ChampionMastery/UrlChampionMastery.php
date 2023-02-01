<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Enum\ChampionMastery;

class UrlChampionMastery
{
    private const URL_BASE = "https://{platform}.api.riotgames.com";
    private const URL_CHAMPION_MASTERY = self::URL_BASE . "/lol/champion-mastery/v4";
    public const URL_CHAMPION_MASTERY_SUMMONER_ID
        = self::URL_CHAMPION_MASTERY . "/champion-masteries/by-summoner/{summonerId}";
    public const URL_CHAMPION_MASTERY_SUMMONER_ID_AND_CHAMPION_ID
        = self::URL_CHAMPION_MASTERY_SUMMONER_ID . "/by-champion/{championId}";
    public const URL_CHAMPION_MASTERY_TOP_SUMMONER_ID = self::URL_CHAMPION_MASTERY_SUMMONER_ID . "/top";
    public const URL_CHAMPION_MASTERY_ALL_SCORE_SUMMONER_ID
        = self::URL_CHAMPION_MASTERY . "/scores/by-summoner/{summonerId}";
}
