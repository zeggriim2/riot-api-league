<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class PerkStyleDto
{
    private string $description;
    /** @var PerkStyleSelectionDto[] */
    private array $selections;
    private int $style;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return PerkStyleSelectionDto[]
     */
    public function getSelections(): array
    {
        return $this->selections;
    }

    /**
     * @param PerkStyleSelectionDto[] $selections
     */
    public function setSelections(array $selections): void
    {
        $this->selections = $selections;
    }

    public function getStyle(): int
    {
        return $this->style;
    }

    public function setStyle(int $style): void
    {
        $this->style = $style;
    }
}