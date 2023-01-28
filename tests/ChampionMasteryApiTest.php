<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Zeggriim\RiotApiDatadragon\Enum\Platform;
use Zeggriim\RiotApiLeague\Model\ChampionMastery\ChampionMasteryDto;
use Zeggriim\RiotApiLeague\Riot\RiotApi;

class ChampionMasteryApiTest extends TestCase
{
    private RiotApi $riotApi;

    protected function setUp(): void
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $this->riotApi = new RiotApi(Platform::EUW1, $_ENV['APIKEY']);
    }

    public function testGetChampionMasteryBySummonerId()
    {
        $championMasteries = $this->riotApi->getChampionMastery()->getChampionMasterieBySummonerId(
            "tSmVTVjydJYj5gbjMy8IhFkyMpgWhc4JNdH4ZbqHal3maT4"
        );
        $this->assertGeneral($championMasteries, ChampionMasteryDto::class);
        $this->assertChampionMasteryDto($championMasteries[0]);
    }


    /**
     * @dataProvider providerChampionMasteryBySummonerAndChampionId
     */
    public function testGetChampionMasteryBySummonerIdAndChampionId($summonerId, $championId)
    {
        $championMastery = $this->riotApi->getChampionMastery()->getChampionMasterieBySummonerIdAndChampionId(
            $summonerId,
            $championId
        );
        $this->assertInstanceOf(ChampionMasteryDto::class,$championMastery);
    }

    public function providerChampionMasteryBySummonerAndChampionId()
    {
        return [
            "Champion ID Integer" => ["tSmVTVjydJYj5gbjMy8IhFkyMpgWhc4JNdH4ZbqHal3maT4", 36],
            "Champion ID String" => ["tSmVTVjydJYj5gbjMy8IhFkyMpgWhc4JNdH4ZbqHal3maT4", "36"],
        ];
    }

    public function testGetChampionMasteryTopBySummonerId()
    {
        $championMasteries = $this->riotApi->getChampionMastery()->getChampionMasterieTopBySummunerId(
            "tSmVTVjydJYj5gbjMy8IhFkyMpgWhc4JNdH4ZbqHal3maT4"
        );
        $this->assertGeneral($championMasteries, ChampionMasteryDto::class);
    }

    public function testChampionMasteryAllScoreBySummonerId()
    {
        $championMastery = $this->riotApi->getChampionMastery()->getChampionMasteryAllScoreBySummonerId(
            "tSmVTVjydJYj5gbjMy8IhFkyMpgWhc4JNdH4ZbqHal3maT4"
        );
        $this->assertIsInt($championMastery);
    }

    private function assertGeneral($actuals, $type)
    {
        $this->assertIsArray($actuals);
        foreach ($actuals as $actual){
            $this->assertInstanceOf($type,$actual);
        }
    }

    private function assertChampionMasteryDto(ChampionMasteryDto $championMasteryDto)
    {
        $this->assertIsInt($championMasteryDto->getChampionId());
        $this->assertIsInt($championMasteryDto->getChampionLevel());
        $this->assertIsInt($championMasteryDto->getChampionPoints());
        $this->assertIsInt($championMasteryDto->getLastPlayTime());
        $this->assertIsInt($championMasteryDto->getChampionPointsSinceLastLevel());
        $this->assertIsInt($championMasteryDto->getChampionPointsUntilNextLevel());
        $this->assertIsBool($championMasteryDto->isChestGranted());
        $this->assertIsInt($championMasteryDto->getTokensEarned());
        $this->assertIsString($championMasteryDto->getSummonerId());
    }
}