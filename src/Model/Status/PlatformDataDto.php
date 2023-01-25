<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Status;

class PlatformDataDto
{
    private string $id;
    private string $name;
    /** @var array<array-key,string>  */
    private array $locales;
    /** @var StatusDto[] */
    private array $maintenances;
    /** @var StatusDto[] */
    private array $incidents;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return array<array-key,string>
     */
    public function getLocales(): array
    {
        return $this->locales;
    }

    /**
     * @param array<array-key,string> $locales
     */
    public function setLocales(array $locales): void
    {
        $this->locales = $locales;
    }

    /**
     * @return StatusDto[]
     */
    public function getMaintenances(): array
    {
        return $this->maintenances;
    }

    /**
     * @param StatusDto[] $maintenances
     */
    public function setMaintenances(array $maintenances): void
    {
        $this->maintenances = $maintenances;
    }

    /**
     * @return StatusDto[]
     */
    public function getIncidents(): array
    {
        return $this->incidents;
    }

    /**
     * @param StatusDto[] $incidents
     */
    public function setIncidents(array $incidents): void
    {
        $this->incidents = $incidents;
    }
}