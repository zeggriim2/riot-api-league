<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Challenges;

class PlayerInfoDto
{
    private array $challenges;
    private array $preferences;
    private ChallengePointsDto $totalPoints;
    private array $categoryPoints;

    /**
     * @return array
     */
    public function getChallenges(): array
    {
        return $this->challenges;
    }

    /**
     * @param array $challenges
     */
    public function setChallenges(array $challenges): void
    {
        $this->challenges = $challenges;
    }

    /**
     * @return array
     */
    public function getPreferences(): array
    {
        return $this->preferences;
    }

    /**
     * @param array $preferences
     */
    public function setPreferences(array $preferences): void
    {
        $this->preferences = $preferences;
    }

    public function getTotalPoints(): ChallengePointsDto
    {
        return $this->totalPoints;
    }

    public function setTotalPoints(ChallengePointsDto $totalPoints): void
    {
        $this->totalPoints = $totalPoints;
    }

    /**
     * @return array
     */
    public function getCategoryPoints(): array
    {
        return $this->categoryPoints;
    }

    /**
     * @param array $categoryPoints
     */
    public function setCategoryPoints(array $categoryPoints): void
    {
        $this->categoryPoints = $categoryPoints;
    }
}
