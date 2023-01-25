<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Riot\ChampionMastery;

use Zeggriim\RiotApiDatadragon\base\BaseApi;
use Zeggriim\RiotApiDatadragon\BuildUrl;
use Zeggriim\RiotApiDatadragon\Serializer\Denormalizer;
use Zeggriim\RiotApiLeague\Enum\ChampionMastery\UrlChampionMastery;
use Zeggriim\RiotApiLeague\Model\ChampionMastery\ChampionMasteryDto;

class ChampionMastery extends BaseApi
{
    public function __construct(
        private readonly string $platform,
        private readonly string $apiKey
    )
    {
        parent::__construct();
    }


    /**
     * Get all champion mastery entries sorted by number of champion points descending
     *
     * @param string $summonerId
     * @return array<array-key,ChampionMasteryDto>
     */
    public function getChampionMasterieBySummonerId(string $summonerId): array
    {
        $url = BuildUrl::build(UrlChampionMastery::URL_CHAMPION_MASTERY_SUMMONER_ID,[
                'platform'      => $this->platform,
                'summonerId'    => $summonerId
            ]
        );

        return $this->call($url,ChampionMasteryDto::class, isArray: true);
    }

    /**
     * Get a champion mastery by player ID and champion ID
     *
     * @param string $summonerId
     * @param int|string $championId
     * @return ChampionMasteryDto
     */
    public function getChampionMasterieBySummonerIdAndChampionId(string $summonerId, int|string $championId): ChampionMasteryDto
    {
        $url = BuildUrl::build(UrlChampionMastery::URL_CHAMPION_MASTERY_SUMMONER_ID_AND_CHAMPION_ID,[
                'platform'      => $this->platform,
                'summonerId'    => $summonerId,
                'championId'    => (string)$championId,
            ]
        );

        return $this->call($url,ChampionMasteryDto::class);
    }

    /**
     * Get specified number of top champion mastery entries sorted by number of champion points descending
     *
     * @param string $summonerId
     * @return array<array-key,ChampionMasteryDto>
     */
    public function getChampionMasterieTopBySummunerId(string $summonerId): array
    {
        $url = BuildUrl::build(UrlChampionMastery::URL_CHAMPION_MASTERY_TOP_SUMMONER_ID,[
                'platform'      => $this->platform,
                'summonerId'    => $summonerId,
            ]
        );

        return $this->call($url,ChampionMasteryDto::class, isArray: true);
    }

    public function getChampionMasteryAllScoreBySummonerId(string $summonerId): int
    {
        $url = BuildUrl::build(UrlChampionMastery::URL_CHAMPION_MASTERY_ALL_SCORE_SUMMONER_ID,[
                'platform'      => $this->platform,
                'summonerId'    => $summonerId,
            ]
        );

        return (int)$this->call($url);
    }

    private function call(string $url, $type = null,bool $isArray = false, ?string $keySearch = null)
    {
        $options = $this->headerToken();

        $datas = $this->makeCall($url, options: $options);

        if($keySearch){
            $datas = $datas[$keySearch];
        }

        if (!is_array($datas)) return $datas;

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