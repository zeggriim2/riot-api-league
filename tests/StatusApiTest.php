<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Zeggriim\RiotApiDatadragon\Enum\Platform;
use Zeggriim\RiotApiLeague\Model\Status\PlatformDataDto;
use Zeggriim\RiotApiLeague\Riot\RiotApi;

class StatusApiTest extends TestCase
{
    private RiotApi $riotApi;

    protected function setUp(): void
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $this->riotApi = new RiotApi(Platform::EUW1, $_ENV['APIKEY']);
    }

    public function testGetStatus()
    {
        $status = $this->riotApi->getStatus()->getStatus();

        $this->assertInstanceOf(PlatformDataDto::class, $status);
    }
}