<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Zeggriim\RiotApiDatadragon\Enum\Platform;
use Zeggriim\RiotApiLeague\Model\Summoner\SummonerDto;
use Zeggriim\RiotApiLeague\Riot\RiotApi;

class SummonerApiTest extends TestCase
{
    private RiotApi $leagueApi;

    protected function setUp(): void
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $this->leagueApi = new RiotApi(Platform::EUW1, $_ENV['APIKEY']);
    }

    public function testGetSummonerByName()
    {
        $summoner = $this->leagueApi->getSummoner()->getSummonerByName("jarkalien");
        $this->assertInstanceOf(SummonerDto::class,$summoner);
        $this->assertSummonerDto($summoner);
    }

    public function testGetSummonerByAccount()
    {
        $summoner = $this->leagueApi->getSummoner()->getSummonerByAccount("vppsXdQUkIWjEkVAVLjdy4tgz0Ogy08aj_nzJIajal5JdQ");
        $this->assertInstanceOf(SummonerDto::class,$summoner);
    }

    public function testGetSummonerByPuuid()
    {
        $summoner = $this->leagueApi->getSummoner()->getSummonerByPuuid(
            "NFLqmQ-TfqzILQI1aYhPTIBn6FG1Ox3QYT2sCGDRQNlEQC8MVIzkOjw2VAncGE70VF-L4ptfaUxEUw"
        );
        $this->assertInstanceOf(SummonerDto::class,$summoner);
    }

    public function testGetSummonerBySummonerId()
    {
        $summoner = $this->leagueApi->getSummoner()->getSummonerBySummonerId(
            "tSmVTVjydJYj5gbjMy8IhFkyMpgWhc4JNdH4ZbqHal3maT4"
        );
        $this->assertInstanceOf(SummonerDto::class,$summoner);
    }

    private function assertSummonerDto(SummonerDto $summonerDto)
    {
        $this->assertIsString($summonerDto->getId());
        $this->assertIsString($summonerDto->getAccountId());
        $this->assertIsString($summonerDto->getPuuid());
        $this->assertIsString($summonerDto->getName());
        $this->assertIsInt($summonerDto->getProfileIconId());
        $this->assertIsInt($summonerDto->getRevisionDate());
        $this->assertIsInt($summonerDto->getSummonerLevel());
    }
}