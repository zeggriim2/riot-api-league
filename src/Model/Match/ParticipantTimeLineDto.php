<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class ParticipantTimeLineDto
{
    private int $participantId;
    private string $puuid;

    public function getParticipantId(): int
    {
        return $this->participantId;
    }

    public function setParticipantId(int $participantId): void
    {
        $this->participantId = $participantId;
    }

    public function getPuuid(): string
    {
        return $this->puuid;
    }

    public function setPuuid(string $puuid): void
    {
        $this->puuid = $puuid;
    }
}