<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Challenges;

class ChallengePointsDto
{
    private string $level;
    private int $current;
    private int $max;
    private int|float $percentile;

    public function getLevel(): string
    {
        return $this->level;
    }

    public function setLevel(string $level): void
    {
        $this->level = $level;
    }

    public function getCurrent(): int
    {
        return $this->current;
    }

    public function setCurrent(int $current): void
    {
        $this->current = $current;
    }

    public function getMax(): int
    {
        return $this->max;
    }

    public function setMax(int $max): void
    {
        $this->max = $max;
    }

    public function getPercentile(): float|int
    {
        return $this->percentile;
    }

    public function setPercentile(float|int $percentile): void
    {
        $this->percentile = $percentile;
    }
}
