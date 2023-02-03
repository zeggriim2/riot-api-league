<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Zeggriim\RiotApiDatadragon\Enum\Platform;
use Zeggriim\RiotApiLeague\Model\Status\ContentDto;
use Zeggriim\RiotApiLeague\Model\Status\PlatformDataDto;
use Zeggriim\RiotApiLeague\Model\Status\StatusDto;
use Zeggriim\RiotApiLeague\Model\Status\UpdateDto;
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
        $this->assertPlatformDataDto($status);
        if (count($status->getMaintenances()) > 0) {
            $this->assertStatusDto($status->getMaintenances()[0]);
        }
        if (count($status->getIncidents()) > 0) {
            $this->assertStatusDto($status->getIncidents()[0]);
        }
    }

    private function assertPlatformDataDto(PlatformDataDto $platformDataDto)
    {
        $this->assertIsString($platformDataDto->getId());
        $this->assertIsString($platformDataDto->getName());
        $this->assertIsArray($platformDataDto->getLocales());
        $this->assertIsArray($platformDataDto->getMaintenances());
        $this->assertContainsOnlyInstancesOf(StatusDto::class, $platformDataDto->getMaintenances());
        $this->assertIsArray($platformDataDto->getIncidents());
        $this->assertContainsOnlyInstancesOf(StatusDto::class, $platformDataDto->getIncidents());
    }

    private function assertStatusDto(StatusDto $statusDto)
    {
        $this->assertIsInt($statusDto->getId());
        $this->assertNullOrString($statusDto->getMaintenanceStatus());
        $this->assertNullOrString($statusDto->getIncidentSeverity());
        if (count($statusDto->getTitles()) > 0) {
            $this->assertContentDto($statusDto->getTitles()[0]);
        }
        if (count($statusDto->getUpdates()) > 0) {
            $this->assertUpdateDto($statusDto->getUpdates()[0]);
        }
        $this->assertIsString($statusDto->getCreatedAt());
        $this->assertIsArray($statusDto->getPlatforms());
        $this->assertNullOrString($statusDto->getArchiveAt());
        $this->assertNullOrString($statusDto->getUpdatedAt());
    }

    private function assertNullOrString(?string $actual)
    {
        if ($actual === null) {
            $this->assertNull($actual);
        } else {
            $this->assertIsString($actual);
        }
    }

    private function assertContentDto(ContentDto $contentDto)
    {
        $this->assertIsString($contentDto->getLocale());
        $this->assertIsString($contentDto->getContent());
    }

    private function assertUpdateDto(UpdateDto $updateDto)
    {
        $this->assertIsInt($updateDto->getId());
        $this->assertIsString($updateDto->getAuthor());
        $this->assertIsBool($updateDto->isPublish());
        $this->assertIsArray($updateDto->getPublishLocations());
        $this->assertIsArray($updateDto->getTranslations());
        $this->assertIsString($updateDto->getCreatedAt());
        $this->assertIsString($updateDto->getUpdatedAt());
    }
}
