<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Summoner;

class SummonerDto
{
    private string $id;
    private string $accountId;
    private string $puuid;
    private string $name;
    private int $profileIconId;
    private int $revisionDate;
    private int $summonerLevel;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function setAccountId(string $accountId): void
    {
        $this->accountId = $accountId;
    }

    public function getPuuid(): string
    {
        return $this->puuid;
    }

    public function setPuuid(string $puuid): void
    {
        $this->puuid = $puuid;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getProfileIconId(): int
    {
        return $this->profileIconId;
    }

    public function setProfileIconId(int $profileIconId): void
    {
        $this->profileIconId = $profileIconId;
    }

    public function getRevisionDate(): int
    {
        return $this->revisionDate;
    }

    public function setRevisionDate(int $revisionDate): void
    {
        $this->revisionDate = $revisionDate;
    }

    public function getSummonerLevel(): int
    {
        return $this->summonerLevel;
    }

    public function setSummonerLevel(int $summonerLevel): void
    {
        $this->summonerLevel = $summonerLevel;
    }
}