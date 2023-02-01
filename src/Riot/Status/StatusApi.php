<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Riot\Status;

use Zeggriim\RiotApiDatadragon\base\BaseApi;
use Zeggriim\RiotApiDatadragon\BuildUrl;
use Zeggriim\RiotApiLeague\Enum\Status\UrlStatus;
use Zeggriim\RiotApiLeague\Model\Status\PlatformDataDto;
use Zeggriim\RiotApiLeague\Riot\Traits\ApiTrait;

class StatusApi extends BaseApi
{
    use ApiTrait;

    public function __construct(
        private readonly string $platform,
        private readonly string $apiKey
    )
    {
        parent::__construct();
    }

    public function getStatus(): PlatformDataDto
    {
        $url = BuildUrl::build(UrlStatus::URL_STATUS,[
                'platform'      => $this->platform,
            ]
        );

        return $this->call($url,type: PlatformDataDto::class);
    }
}