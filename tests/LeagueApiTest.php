<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Zeggriim\RiotApiDatadragon\Enum\Platform;
use Zeggriim\RiotApiLeague\Enum\League\Division;
use Zeggriim\RiotApiLeague\Enum\League\Queue;
use Zeggriim\RiotApiLeague\Enum\League\Tier;
use Zeggriim\RiotApiLeague\Model\League\LeagueDto;
use Zeggriim\RiotApiLeague\Model\League\LeagueItemDto;
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
     * @param $queue
     * @param $tier
     * @param $division
     * @return void
     */
    public function testGetLeagueGeneral($queue, $tier, $division): void
    {
        $leagues = $this->riotApi->getLeague()->getLeague(
            $queue,
            $tier,
            $division
        );
        $this->assertGeneral($leagues, LeagueDto::class);
    }

    public function providerLeagueData(): array
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
        $this->assertLeagueDto($leagues[0]);
    }

    public function testGetLeagueLeagueId()
    {
        $league = $this->riotApi->getLeague()->getLeagueByLeagueId(
            "8063dc45-b6fa-4510-b0cb-fe241e949676"
        );
        $this->assertInstanceOf(LeagueListDto::class, $league);
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
        $this->assertLeagueListDto($league);
        $this->assertContainsOnlyInstancesOf(LeagueItemDto::class, $league->getEntries());
        $this->assertLeagueItemDto($league->getEntries()[0]);
    }

    private function assertGeneral($actuals, $type)
    {
        $this->assertIsArray($actuals);
        foreach ($actuals as $actual) {
            $this->assertInstanceOf($type, $actual);
        }
    }

    private function assertLeagueDto(LeagueDto$league)
    {
        $this->assertIsString($league->getLeagueId());
        $this->assertIsString($league->getQueueType());
        $this->assertIsString($league->getTier());
        $this->assertIsString($league->getRank());
        $this->assertIsString($league->getSummonerId());
        $this->assertIsString($league->getSummonerName());
        $this->assertIsInt($league->getLeaguePoints());
        $this->assertIsInt($league->getWins());
        $this->assertIsInt($league->getLosses());
        $this->assertIsBool($league->isVeteran());
        $this->assertIsBool($league->isInactive());
        $this->assertIsBool($league->isFreshBlood());
        $this->assertIsBool($league->isHotStreak());
    }

    private function assertLeagueItemDto(LeagueItemDto $leagueItemDto)
    {
        $this->assertIsString($leagueItemDto->getSummonerId());
        $this->assertIsString($leagueItemDto->getSummonerName());
        $this->assertIsString($leagueItemDto->getRank());
        $this->assertIsInt($leagueItemDto->getLeaguePoints());
        $this->assertIsInt($leagueItemDto->getWins());
        $this->assertIsInt($leagueItemDto->getLosses());
        $this->assertIsBool($leagueItemDto->isVeteran());
        $this->assertIsBool($leagueItemDto->isInactive());
        $this->assertIsBool($leagueItemDto->isFreshBlood());
        $this->assertIsBool($leagueItemDto->isHotStreak());
    }

    private function assertLeagueListDto(LeagueListDto $leagueListDto)
    {
        $this->assertIsString($leagueListDto->getTier());
        $this->assertIsString($leagueListDto->getLeagueId());
        $this->assertIsString($leagueListDto->getQueue());
        $this->assertIsString($leagueListDto->getName());
    }
}
