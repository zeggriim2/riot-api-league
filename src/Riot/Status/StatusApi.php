<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Riot\Status;

use Zeggriim\RiotApiDatadragon\base\BaseApi;
use Zeggriim\RiotApiDatadragon\BuildUrl;
use Zeggriim\RiotApiDatadragon\Serializer\Denormalizer;
use Zeggriim\RiotApiLeague\Enum\Status\UrlStatus;
use Zeggriim\RiotApiLeague\Model\Status\PlatformDataDto;

class StatusApi extends BaseApi
{
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

        return $this->call($url,PlatformDataDto::class);
    }

    private function call(string $url, $type,bool $isArray = false, ?string $keySearch = null)
    {
        $options = $this->headerToken();

        $datas = $this->makeCall($url, options: $options);

        if($keySearch){
            $datas = $datas[$keySearch];
        }


        $denormalize = new Denormalizer();

        if($isArray){
            $objetArray = [];
            foreach ($datas as $data){
                $objetArray[] = $denormalize->denormalize($data, $type);
            }
            return $objetArray;
        }else{
            return $denormalize->denormalize($datas, $type);
        }
    }

    private function headerToken()
    {
        return [
            "headers" => [
                "X-Riot-Token" => $this->apiKey
            ]
        ];
    }
}