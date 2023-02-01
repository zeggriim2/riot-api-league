<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Riot\Champion;

use Zeggriim\RiotApiDatadragon\base\BaseApi;
use Zeggriim\RiotApiDatadragon\BuildUrl;
use Zeggriim\RiotApiLeague\Enum\Champion\UrlChampion;
use Zeggriim\RiotApiLeague\Model\Champion\ChampionInfo;
use Zeggriim\RiotApiLeague\Riot\Traits\ApiTrait;

class ChampionApi extends BaseApi
{
    use ApiTrait;

    public function __construct(
        private readonly string $platform,
        private readonly string $apiKey
    )
    {
        parent::__construct();
    }

    public function getChampionRotations(): ChampionInfo
    {
        $url = BuildUrl::build(UrlChampion::URL_CHAMPION_ROTATIONS,[
                'platform'  => $this->platform
            ]
        );

        return $this->call($url, type: ChampionInfo::class);    }
}