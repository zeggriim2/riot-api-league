<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Enum\Summoner;

class UrlSummoner
{
    private const URL_BASE = "https://{platform}.api.riotgames.com";
    public const URL_SUMMONER = self::URL_BASE . "/lol/summoner/v4/summoners/";
    public const URL_SUMMONER_BY_NAME = self::URL_SUMMONER . "by-name/{name}";
    public const URL_SUMMONER_BY_ACCOUNT_ID = self::URL_SUMMONER . "by-account/{accountId}";
    public const URL_SUMMONER_BY_PUUID = self::URL_SUMMONER . "by-puuid/{puuid}";
    public const URL_SUMMONER_BY_SUMMONER_ID = self::URL_SUMMONER . "{summonerId}";
}
