<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class InfoTimeLineDto
{
    private int $frameInterval;
    /** @var FrameTimeLineDto[] */
    private array $frames;
    private int $gameId;
    /** @var ParticipantTimeLineDto[] */
    private array $participants;

    public function getFrameInterval(): int
    {
        return $this->frameInterval;
    }

    public function setFrameInterval(int $frameInterval): void
    {
        $this->frameInterval = $frameInterval;
    }

    /**
     * @return FrameTimeLineDto[]
     */
    public function getFrames(): array
    {
        return $this->frames;
    }

    /**
     * @param FrameTimeLineDto[] $frames
     */
    public function setFrames(array $frames): void
    {
        $this->frames = $frames;
    }

    public function getGameId(): int
    {
        return $this->gameId;
    }

    public function setGameId(int $gameId): void
    {
        $this->gameId = $gameId;
    }

    /**
     * @return ParticipantTimeLineDto[]
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    /**
     * @param ParticipantTimeLineDto[] $participants
     */
    public function setParticipants(array $participants): void
    {
        $this->participants = $participants;
    }
}
