<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class InfoDto
{
    private int $gameCreation;
    private int $gameDuration;
    private int $gameEndTimestamp;
    private int $gameId;
    private string $gameMode;
    private string $gameName;
    private int $gameStartTimestamp;
    private string $gameType;
    private string $gameVersion;
    private int $mapId;
    /** @var ParticipantDto[] */
    private array $participants;
    private string $platformId;
    private int $queueId;
    /** @var TeamDto[] */
    private array $teams;
    private string $tournamentCode;

    public function getGameCreation(): int
    {
        return $this->gameCreation;
    }

    public function setGameCreation(int $gameCreation): void
    {
        $this->gameCreation = $gameCreation;
    }

    public function getGameDuration(): int
    {
        return $this->gameDuration;
    }

    public function setGameDuration(int $gameDuration): void
    {
        $this->gameDuration = $gameDuration;
    }

    public function getGameEndTimestamp(): int
    {
        return $this->gameEndTimestamp;
    }

    public function setGameEndTimestamp(int $gameEndTimestamp): void
    {
        $this->gameEndTimestamp = $gameEndTimestamp;
    }

    public function getGameId(): int
    {
        return $this->gameId;
    }

    public function setGameId(int $gameId): void
    {
        $this->gameId = $gameId;
    }

    public function getGameMode(): string
    {
        return $this->gameMode;
    }

    public function setGameMode(string $gameMode): void
    {
        $this->gameMode = $gameMode;
    }

    public function getGameName(): string
    {
        return $this->gameName;
    }

    public function setGameName(string $gameName): void
    {
        $this->gameName = $gameName;
    }

    public function getGameStartTimestamp(): int
    {
        return $this->gameStartTimestamp;
    }

    public function setGameStartTimestamp(int $gameStartTimestamp): void
    {
        $this->gameStartTimestamp = $gameStartTimestamp;
    }

    public function getGameType(): string
    {
        return $this->gameType;
    }

    public function setGameType(string $gameType): void
    {
        $this->gameType = $gameType;
    }

    public function getGameVersion(): string
    {
        return $this->gameVersion;
    }

    public function setGameVersion(string $gameVersion): void
    {
        $this->gameVersion = $gameVersion;
    }

    public function getMapId(): int
    {
        return $this->mapId;
    }

    public function setMapId(int $mapId): void
    {
        $this->mapId = $mapId;
    }

    /**
     * @return ParticipantDto[]
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    /**
     * @param ParticipantDto[] $participants
     */
    public function setParticipants(array $participants): void
    {
        $this->participants = $participants;
    }

    public function getPlatformId(): string
    {
        return $this->platformId;
    }

    public function setPlatformId(string $platformId): void
    {
        $this->platformId = $platformId;
    }

    public function getQueueId(): int
    {
        return $this->queueId;
    }

    public function setQueueId(int $queueId): void
    {
        $this->queueId = $queueId;
    }

    /**
     * @return TeamDto[]
     */
    public function getTeams(): array
    {
        return $this->teams;
    }

    /**
     * @param TeamDto[] $teams
     */
    public function setTeams(array $teams): void
    {
        $this->teams = $teams;
    }

    public function getTournamentCode(): string
    {
        return $this->tournamentCode;
    }

    public function setTournamentCode(string $tournamentCode): void
    {
        $this->tournamentCode = $tournamentCode;
    }
}