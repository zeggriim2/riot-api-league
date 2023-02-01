<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Zeggriim\RiotApiDatadragon\Enum\Platform;
use Zeggriim\RiotApiLeague\Model\Champion\ChampionInfo;
use Zeggriim\RiotApiLeague\Riot\RiotApi;

class ChampionApiTest extends TestCase
{
    private RiotApi $riotApi;

    protected function setUp(): void
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $this->riotApi = new RiotApi(Platform::EUW1, $_ENV['APIKEY']);
    }

    public function testGetChampionRotations()
    {
        $championRotation = $this->riotApi->getChampion()->getChampionRotations();
        $this->assertInstanceOf(ChampionInfo::class, $championRotation);
        $this->assertChampionInfo($championRotation);
    }

    private function assertChampionInfo(ChampionInfo $championInfo)
    {
        $this->assertIsInt($championInfo->getMaxNewPlayerLevel());
        $this->assertIsArray($championInfo->getFreeChampionIdsForNewPlayers());
        $this->assertIsArray($championInfo->getFreeChampionIds());
    }
}
