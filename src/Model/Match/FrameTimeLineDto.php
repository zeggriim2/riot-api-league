<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class FrameTimeLineDto
{
    private array $events;
    private array $participantFrames;
    private int $timestamp;

    /**
     * @return array
     */
    public function getEvents(): array
    {
        return $this->events;
    }

    /**
     * @param array $events
     */
    public function setEvents(array $events): void
    {
        $this->events = $events;
    }

    /**
     * @return array
     */
    public function getParticipantFrames(): array
    {
        return $this->participantFrames;
    }

    /**
     * @param array $participantFrames
     */
    public function setParticipantFrames(array $participantFrames): void
    {
        $this->participantFrames = $participantFrames;
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function setTimestamp(int $timestamp): void
    {
        $this->timestamp = $timestamp;
    }
}