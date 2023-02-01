<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class TeamDto
{
    /** @var BanDto[] */
    private array $bans;
    private ObjectivesDto $objectives;
    private int $teamId;
    private bool $win;

    /**
     * @return BanDto[]
     */
    public function getBans(): array
    {
        return $this->bans;
    }

    /**
     * @param BanDto[] $bans
     */
    public function setBans(array $bans): void
    {
        $this->bans = $bans;
    }

    public function getObjectives(): ObjectivesDto
    {
        return $this->objectives;
    }

    public function setObjectives(ObjectivesDto $objectives): void
    {
        $this->objectives = $objectives;
    }

    public function getTeamId(): int
    {
        return $this->teamId;
    }

    public function setTeamId(int $teamId): void
    {
        $this->teamId = $teamId;
    }

    public function isWin(): bool
    {
        return $this->win;
    }

    public function setWin(bool $win): void
    {
        $this->win = $win;
    }
}
