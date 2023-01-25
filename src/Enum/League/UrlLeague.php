<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Enum\League;

class UrlLeague
{
    private const URL_BASE = "https://{platform}.api.riotgames.com";
    private const URL_LEAGUE = self::URL_BASE . "/lol/league/v4/";
    public const URL_LEAGUE_GENERAL = self::URL_LEAGUE . "entries/{queue}/{tier}/{division}";
    public const URL_LEAGUE_SUMMONER_ID = self::URL_LEAGUE . "entries/by-summoner/{summonerId}";
}