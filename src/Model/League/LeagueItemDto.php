<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\League;

class LeagueItemDto
{
    private string $summonerId;
    private string $summonerName;
    private int $leaguePoints;
    private string $rank;
    private int $wins;
    private int $losses;
    private bool $veteran;
    private bool $inactive;
    private bool $freshBlood;
    private bool $hotStreak;

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

    public function getRank(): string
    {
        return $this->rank;
    }

    public function setRank(string $rank): void
    {
        $this->rank = $rank;
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