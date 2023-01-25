<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\League;

class LeagueListDto
{
    private string $tier;
    private string $leagueId;
    private string $queue;
    private string $name;
    /** @var array<LeagueDto[]>  */
    private array $entries;

    public function getTier(): string
    {
        return $this->tier;
    }

    public function setTier(string $tier): void
    {
        $this->tier = $tier;
    }

    public function getLeagueId(): string
    {
        return $this->leagueId;
    }

    public function setLeagueId(string $leagueId): void
    {
        $this->leagueId = $leagueId;
    }

    public function getQueue(): string
    {
        return $this->queue;
    }

    public function setQueue(string $queue): void
    {
        $this->queue = $queue;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return array<LeagueDto[]>
     */
    public function getEntries(): array
    {
        return $this->entries;
    }

    /**
     * @param array<LeagueDto[]> $entries
     */
    public function setEntries(array $entries): void
    {
        $this->entries = $entries;
    }
}