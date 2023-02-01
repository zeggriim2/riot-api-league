<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class PerkStyleSelectionDto
{
    private int $perk;
    private int $var1;
    private int $var2;
    private int $var3;

    public function getPerk(): int
    {
        return $this->perk;
    }

    public function setPerk(int $perk): void
    {
        $this->perk = $perk;
    }

    public function getVar1(): int
    {
        return $this->var1;
    }

    public function setVar1(int $var1): void
    {
        $this->var1 = $var1;
    }

    public function getVar2(): int
    {
        return $this->var2;
    }

    public function setVar2(int $var2): void
    {
        $this->var2 = $var2;
    }

    public function getVar3(): int
    {
        return $this->var3;
    }

    public function setVar3(int $var3): void
    {
        $this->var3 = $var3;
    }
}
