<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class PerkStatsDto
{
    private int $defense;
    private int $flex;
    private int $offense;

    public function getDefense(): int
    {
        return $this->defense;
    }

    public function setDefense(int $defense): void
    {
        $this->defense = $defense;
    }

    public function getFlex(): int
    {
        return $this->flex;
    }

    public function setFlex(int $flex): void
    {
        $this->flex = $flex;
    }

    public function getOffense(): int
    {
        return $this->offense;
    }

    public function setOffense(int $offense): void
    {
        $this->offense = $offense;
    }
}