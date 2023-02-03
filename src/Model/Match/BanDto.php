<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class BanDto
{
    private int $championId;
    private int $pickTurn;

    public function getChampionId(): int
    {
        return $this->championId;
    }

    public function setChampionId(int $championId): void
    {
        $this->championId = $championId;
    }

    public function getPickTurn(): int
    {
        return $this->pickTurn;
    }

    public function setPickTurn(int $pickTurn): void
    {
        $this->pickTurn = $pickTurn;
    }
}
