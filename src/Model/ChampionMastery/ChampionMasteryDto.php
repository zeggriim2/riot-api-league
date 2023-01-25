<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\ChampionMastery;

class ChampionMasteryDto
{
    private int $championId;
    private int $championLevel;
    private int $championPoints;
    private int $lastPlayTime;
    private int $championPointsSinceLastLevel;
    private int $championPointsUntilNextLevel;
    private bool $chestGranted;
    private int $tokensEarned;
    private string $summonerId;

    public function getChampionId(): int
    {
        return $this->championId;
    }

    public function setChampionId(int $championId): void
    {
        $this->championId = $championId;
    }

    public function getChampionLevel(): int
    {
        return $this->championLevel;
    }

    public function setChampionLevel(int $championLevel): void
    {
        $this->championLevel = $championLevel;
    }

    public function getChampionPoints(): int
    {
        return $this->championPoints;
    }

    public function setChampionPoints(int $championPoints): void
    {
        $this->championPoints = $championPoints;
    }

    public function getLastPlayTime(): int
    {
        return $this->lastPlayTime;
    }

    public function setLastPlayTime(int $lastPlayTime): void
    {
        $this->lastPlayTime = $lastPlayTime;
    }

    public function getChampionPointsSinceLastLevel(): int
    {
        return $this->championPointsSinceLastLevel;
    }

    public function setChampionPointsSinceLastLevel(int $championPointsSinceLastLevel): void
    {
        $this->championPointsSinceLastLevel = $championPointsSinceLastLevel;
    }

    public function getChampionPointsUntilNextLevel(): int
    {
        return $this->championPointsUntilNextLevel;
    }

    public function setChampionPointsUntilNextLevel(int $championPointsUntilNextLevel): void
    {
        $this->championPointsUntilNextLevel = $championPointsUntilNextLevel;
    }

    public function isChestGranted(): bool
    {
        return $this->chestGranted;
    }

    public function setChestGranted(bool $chestGranted): void
    {
        $this->chestGranted = $chestGranted;
    }

    public function getTokensEarned(): int
    {
        return $this->tokensEarned;
    }

    public function setTokensEarned(int $tokensEarned): void
    {
        $this->tokensEarned = $tokensEarned;
    }

    public function getSummonerId(): string
    {
        return $this->summonerId;
    }

    public function setSummonerId(string $summonerId): void
    {
        $this->summonerId = $summonerId;
    }
}