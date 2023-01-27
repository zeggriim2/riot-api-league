<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Status;

class StatusDto
{
    private int $id;
    private ?string $maintenance_status;
    private string $incident_severity;
    /** @var ContentDto[]  */
    private array $titles;
    /** @var UpdateDto[] */
    private array $updates;
    private string $created_at;
    private ?string $archive_at;
    private ?string $updated_at;
    /** @var array<array-key,string>  */
    private array $platforms;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getMaintenanceStatus(): ?string
    {
        return $this->maintenance_status;
    }

    public function setMaintenanceStatus(?string $maintenance_status): void
    {
        $this->maintenance_status = $maintenance_status;
    }

    public function getIncidentSeverity(): string
    {
        return $this->incident_severity;
    }

    public function setIncidentSeverity(string $incident_severity): void
    {
        $this->incident_severity = $incident_severity;
    }

    /**
     * @return ContentDto[]
     */
    public function getTitles(): array
    {
        return $this->titles;
    }

    /**
     * @param ContentDto[] $titles
     */
    public function setTitles(array $titles): void
    {
        $this->titles = $titles;
    }

    /**
     * @return UpdateDto[]
     */
    public function getUpdates(): array
    {
        return $this->updates;
    }

    /**
     * @param UpdateDto[] $updates
     */
    public function setUpdates(array $updates): void
    {
        $this->updates = $updates;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    public function getArchiveAt(): ?string
    {
        return $this->archive_at;
    }

    public function setArchiveAt(?string $archive_at): void
    {
        $this->archive_at = $archive_at;
    }

    public function getUpdatedAt(): ?string
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return array<array-key,string>
     */
    public function getPlatforms(): array
    {
        return $this->platforms;
    }

    /**
     * @param array<array-key,string> $platforms
     */
    public function setPlatforms(array $platforms): void
    {
        $this->platforms = $platforms;
    }
}