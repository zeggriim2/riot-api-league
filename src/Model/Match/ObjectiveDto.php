<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class ObjectiveDto
{
    private bool $first;
    private int $kills;

    public function isFirst(): bool
    {
        return $this->first;
    }

    public function setFirst(bool $first): void
    {
        $this->first = $first;
    }

    public function getKills(): int
    {
        return $this->kills;
    }

    public function setKills(int $kills): void
    {
        $this->kills = $kills;
    }
}
