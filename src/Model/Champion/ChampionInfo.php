<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Champion;

class ChampionInfo
{
    private int $maxNewPlayerLevel;
    /** @var array<array-key, int>  */
    private array $freeChampionIdsForNewPlayers;
    /** @var array<array-key, int>  */
    private array $freeChampionIds;

    public function getMaxNewPlayerLevel(): int
    {
        return $this->maxNewPlayerLevel;
    }

    public function setMaxNewPlayerLevel(int $maxNewPlayerLevel): void
    {
        $this->maxNewPlayerLevel = $maxNewPlayerLevel;
    }

    /**
     * @return array<array-key, int>
     */
    public function getFreeChampionIdsForNewPlayers(): array
    {
        return $this->freeChampionIdsForNewPlayers;
    }

    /**
     * @param array<array-key, int> $freeChampionIdsForNewPlayers
     */
    public function setFreeChampionIdsForNewPlayers(array $freeChampionIdsForNewPlayers): void
    {
        $this->freeChampionIdsForNewPlayers = $freeChampionIdsForNewPlayers;
    }

    /**
     * @return array<array-key, int>
     */
    public function getFreeChampionIds(): array
    {
        return $this->freeChampionIds;
    }

    /**
     * @param array<array-key, int> $freeChampionIds
     */
    public function setFreeChampionIds(array $freeChampionIds): void
    {
        $this->freeChampionIds = $freeChampionIds;
    }
}