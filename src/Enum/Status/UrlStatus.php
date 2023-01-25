<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Enum\Status;

class UrlStatus
{
    private const URL_BASE = "https://{platform}.api.riotgames.com";
    public const URL_STATUS = self::URL_BASE . "/lol/status/v4/platform-data";
}