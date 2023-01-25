<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Zeggriim\RiotApiDatadragon\Enum\Platform;
use Zeggriim\RiotApiLeague\Enum\League\Division;
use Zeggriim\RiotApiLeague\Enum\League\Queue;
use Zeggriim\RiotApiLeague\Enum\League\Tier;
use Zeggriim\RiotApiLeague\Model\League;
use Zeggriim\RiotApiLeague\Riot\RiotApi;

class LeagueApiTest extends TestCase
{
    private RiotApi $leagueApi;

    protected function setUp(): void
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $this->leagueApi = new RiotApi(Platform::EUW1, $_ENV['APIKEY']);
    }

    public function testGetLeagueGeneral()
    {
        $leagues = $this->leagueApi->getLeague()->getLeague(
            Queue::RANKED_FLEX,
            Tier::GOLD,
            Division::I
        );
        $this->assertGeneral($leagues, League::class);
    }

    public function testGetLeagueSummonerId()
    {
        $leagues = $this->leagueApi->getLeague()->getLeagueBySummonerId(
            "tSmVTVjydJYj5gbjMy8IhFkyMpgWhc4JNdH4ZbqHal3maT4"
        );
        $this->assertGeneral($leagues, League::class);
    }

    private function assertGeneral($actuals, $type)
    {
        $this->assertIsArray($actuals);
        foreach ($actuals as $actual){
            $this->assertInstanceOf($type,$actual);
        }
    }
}