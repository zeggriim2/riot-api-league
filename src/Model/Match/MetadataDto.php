<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class MetadataDto
{
    private string $dataVersion;
    private string $matchId;
    /** @var array<array-key,string> */
    private array $participants;

    public function getDataVersion(): string
    {
        return $this->dataVersion;
    }

    public function setDataVersion(string $dataVersion): void
    {
        $this->dataVersion = $dataVersion;
    }

    public function getMatchId(): string
    {
        return $this->matchId;
    }

    public function setMatchId(string $matchId): void
    {
        $this->matchId = $matchId;
    }

    /**
     * @return array<array-key,string>
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    /**
     * @param array<array-key,string> $participants
     */
    public function setParticipants(array $participants): void
    {
        $this->participants = $participants;
    }
}