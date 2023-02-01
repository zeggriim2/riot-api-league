<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Enum\Match;

class UrlMatch
{
    private const URL_BASE                  = "https://{region}.api.riotgames.com";
    private const URL_MATCH                 = self::URL_BASE . "/lol/match/v5/matches/";
    public const URL_MATCH_SUMMONER_PUUID  = self::URL_MATCH . "by-puuid/{puuid}/ids";
    public const URL_MATCH_ID              = self::URL_MATCH . "{id}";
    public const URL_MATCH_ID_TIMELINE     = self::URL_MATCH . "{id}/timeline";
}
