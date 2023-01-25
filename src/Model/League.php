<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model;

class League
{
    private string $leagueId;
    private string $queueType;
    private string $tier;
    private string $rank;
    private string $summonerId;
    private string $summonerName;
    private int $leaguePoints;
    private int $wins;
    private int $losses;
    private bool $veteran;
    private bool $inactive;
    private bool $freshBlood;
    private bool $hotStreak;

    public function getLeagueId(): string
    {
        return $this->leagueId;
    }

    public function setLeagueId(string $leagueId): void
    {
        $this->leagueId = $leagueId;
    }

    public function getQueueType(): string
    {
        return $this->queueType;
    }

    public function setQueueType(string $queueType): void
    {
        $this->queueType = $queueType;
    }

    public function getTier(): string
    {
        return $this->tier;
    }

    public function setTier(string $tier): void
    {
        $this->tier = $tier;
    }

    public function getRank(): string
    {
        return $this->rank;
    }

    public function setRank(string $rank): void
    {
        $this->rank = $rank;
    }

    public function getSummonerId(): string
    {
        return $this->summonerId;
    }

    public function setSummonerId(string $summonerId): void
    {
        $this->summonerId = $summonerId;
    }

    public function getSummonerName(): string
    {
        return $this->summonerName;
    }

    public function setSummonerName(string $summonerName): void
    {
        $this->summonerName = $summonerName;
    }

    public function getLeaguePoints(): int
    {
        return $this->leaguePoints;
    }

    public function setLeaguePoints(int $leaguePoints): void
    {
        $this->leaguePoints = $leaguePoints;
    }

    public function getWins(): int
    {
        return $this->wins;
    }

    public function setWins(int $wins): void
    {
        $this->wins = $wins;
    }

    public function getLosses(): int
    {
        return $this->losses;
    }

    public function setLosses(int $losses): void
    {
        $this->losses = $losses;
    }

    public function isVeteran(): bool
    {
        return $this->veteran;
    }

    public function setVeteran(bool $veteran): void
    {
        $this->veteran = $veteran;
    }

    public function isInactive(): bool
    {
        return $this->inactive;
    }

    public function setInactive(bool $inactive): void
    {
        $this->inactive = $inactive;
    }

    public function isFreshBlood(): bool
    {
        return $this->freshBlood;
    }

    public function setFreshBlood(bool $freshBlood): void
    {
        $this->freshBlood = $freshBlood;
    }

    public function isHotStreak(): bool
    {
        return $this->hotStreak;
    }

    public function setHotStreak(bool $hotStreak): void
    {
        $this->hotStreak = $hotStreak;
    }
}