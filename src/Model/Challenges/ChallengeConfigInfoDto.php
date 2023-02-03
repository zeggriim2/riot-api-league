<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Challenges;

class ChallengeConfigInfoDto
{
    private int $id;
    private array $localizedNames;
    private string $state;
    // TODO    private int $tracking;
    private ?int $startTimestamp = null;
    private ?int $endTimestamp = null;
    private bool $leaderboard;
    private array $thresholds;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return array
     */
    public function getLocalizedNames(): array
    {
        return $this->localizedNames;
    }

    /**
     * @param array $localizedNames
     */
    public function setLocalizedNames(array $localizedNames): void
    {
        $this->localizedNames = $localizedNames;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getStartTimestamp(): ?int
    {
        return $this->startTimestamp;
    }

    public function setStartTimestamp(?int $startTimestamp): void
    {
        $this->startTimestamp = $startTimestamp;
    }

    public function getEndTimestamp(): ?int
    {
        return $this->endTimestamp;
    }

    public function setEndTimestamp(?int $endTimestamp): void
    {
        $this->endTimestamp = $endTimestamp;
    }

    public function isLeaderboard(): bool
    {
        return $this->leaderboard;
    }

    public function setLeaderboard(bool $leaderboard): void
    {
        $this->leaderboard = $leaderboard;
    }

    /**
     * @return array
     */
    public function getThresholds(): array
    {
        return $this->thresholds;
    }

    /**
     * @param array $thresholds
     */
    public function setThresholds(array $thresholds): void
    {
        $this->thresholds = $thresholds;
    }
}
