<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Zeggriim\RiotApiDatadragon\Enum\Platform;
use Zeggriim\RiotApiLeague\Enum\League\Division;
use Zeggriim\RiotApiLeague\Enum\League\Queue;
use Zeggriim\RiotApiLeague\Enum\League\Tier;
use Zeggriim\RiotApiLeague\Model\League\LeagueDto;
use Zeggriim\RiotApiLeague\Model\League\LeagueListDto;
use Zeggriim\RiotApiLeague\Riot\RiotApi;

class LeagueApiTest extends TestCase
{
    private RiotApi $riotApi;

    protected function setUp(): void
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $this->riotApi = new RiotApi(Platform::EUW1, $_ENV['APIKEY']);
    }

    /**
     * @dataProvider providerLeagueData
     * @return void
     */
    public function testGetLeagueGeneral($queue, $tier, $division)
    {
        $leagues = $this->riotApi->getLeague()->getLeague(
            $queue,
            $tier,
            $division
        );
        $this->assertGeneral($leagues, LeagueDto::class);
    }

    public function providerLeagueData()
    {
        return [
            [Queue::RANKED_SOLO, Tier::DIAMOND, Division::I],
            [Queue::RANKED_SOLO, Tier::DIAMOND, Division::II],
            [Queue::RANKED_SOLO, Tier::DIAMOND, Division::III],
            [Queue::RANKED_SOLO, Tier::DIAMOND, Division::IV],
            [Queue::RANKED_SOLO, Tier::PLATINUM, Division::I],
            [Queue::RANKED_SOLO, Tier::PLATINUM, Division::II],
            [Queue::RANKED_SOLO, Tier::PLATINUM, Division::III],
            [Queue::RANKED_SOLO, Tier::PLATINUM, Division::IV],
            [Queue::RANKED_SOLO, Tier::GOLD, Division::I],
            [Queue::RANKED_SOLO, Tier::GOLD, Division::II],
            [Queue::RANKED_SOLO, Tier::GOLD, Division::III],
            [Queue::RANKED_SOLO, Tier::GOLD, Division::IV],
            [Queue::RANKED_SOLO, Tier::SILVER, Division::I],
            [Queue::RANKED_SOLO, Tier::SILVER, Division::II],
            [Queue::RANKED_SOLO, Tier::SILVER, Division::III],
            [Queue::RANKED_SOLO, Tier::SILVER, Division::IV],
            [Queue::RANKED_SOLO, Tier::BRONZE, Division::I],
            [Queue::RANKED_SOLO, Tier::BRONZE, Division::II],
            [Queue::RANKED_SOLO, Tier::BRONZE, Division::III],
            [Queue::RANKED_SOLO, Tier::BRONZE, Division::IV],
            [Queue::RANKED_SOLO, Tier::IRON, Division::I],
            [Queue::RANKED_SOLO, Tier::IRON, Division::II],
            [Queue::RANKED_SOLO, Tier::IRON, Division::III],
            [Queue::RANKED_SOLO, Tier::IRON, Division::IV],
        ];
    }

    public function testGetLeagueSummonerId()
    {
        $leagues = $this->riotApi->getLeague()->getLeagueBySummonerId(
            "tSmVTVjydJYj5gbjMy8IhFkyMpgWhc4JNdH4ZbqHal3maT4"
        );
        $this->assertGeneral($leagues, LeagueDto::class);
    }

    public function testGetLeagueLeagueId()
    {
        $league = $this->riotApi->getLeague()->getLeagueByLeagueId(
            "8063dc45-b6fa-4510-b0cb-fe241e949676"
        );
        $this->assertInstanceOf(LeagueListDto::class,$league);
    }

    public function testGetLeagueChallenger()
    {
        $league = $this->riotApi->getLeague()->getLeagueChallenger(Queue::RANKED_SOLO);
        $this->assertInstanceOf(LeagueListDto::class, $league);
    }

    public function testGetGrandMaster()
    {
        $league = $this->riotApi->getLeague()->getGrandMaster(Queue::RANKED_SOLO);
        $this->assertInstanceOf(LeagueListDto::class, $league);
    }

    public function testGetMaster()
    {
        $league = $this->riotApi->getLeague()->getMaster(Queue::RANKED_SOLO);
        $this->assertInstanceOf(LeagueListDto::class, $league);
    }

    private function assertGeneral($actuals, $type)
    {
        $this->assertIsArray($actuals);
        foreach ($actuals as $actual){
            $this->assertInstanceOf($type,$actual);
        }
    }
}