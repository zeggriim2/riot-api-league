<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class ObjectivesDto
{
    private ObjectiveDto $baron;
    private ObjectiveDto $champion;
    private ObjectiveDto $dragon;
    private ObjectiveDto $inhibitor;
    private ObjectiveDto $riftHerald;
    private ObjectiveDto $tower;

    public function getBaron(): ObjectiveDto
    {
        return $this->baron;
    }

    public function setBaron(ObjectiveDto $baron): void
    {
        $this->baron = $baron;
    }

    public function getChampion(): ObjectiveDto
    {
        return $this->champion;
    }

    public function setChampion(ObjectiveDto $champion): void
    {
        $this->champion = $champion;
    }

    public function getDragon(): ObjectiveDto
    {
        return $this->dragon;
    }

    public function setDragon(ObjectiveDto $dragon): void
    {
        $this->dragon = $dragon;
    }

    public function getInhibitor(): ObjectiveDto
    {
        return $this->inhibitor;
    }

    public function setInhibitor(ObjectiveDto $inhibitor): void
    {
        $this->inhibitor = $inhibitor;
    }

    public function getRiftHerald(): ObjectiveDto
    {
        return $this->riftHerald;
    }

    public function setRiftHerald(ObjectiveDto $riftHerald): void
    {
        $this->riftHerald = $riftHerald;
    }

    public function getTower(): ObjectiveDto
    {
        return $this->tower;
    }

    public function setTower(ObjectiveDto $tower): void
    {
        $this->tower = $tower;
    }
}
