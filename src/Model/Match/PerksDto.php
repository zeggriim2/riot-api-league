<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class PerksDto
{
    private PerkStatsDto $statPerks;
    /** @var PerkStyleDto[]  */
    private array $styles;

    public function getStatPerks(): PerkStatsDto
    {
        return $this->statPerks;
    }

    public function setStatPerks(PerkStatsDto $statPerks): void
    {
        $this->statPerks = $statPerks;
    }

    /**
     * @return PerkStyleDto[]
     */
    public function getStyles(): array
    {
        return $this->styles;
    }

    /**
     * @param PerkStyleDto[] $styles
     */
    public function setStyles(array $styles): void
    {
        $this->styles = $styles;
    }
}