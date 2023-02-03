<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Status;

class UpdateDto
{
    private int $id;
    private string $author;
    private bool $publish;
    /** @var array<array-key, string>  */
    private array $publish_locations;
    /** @var ContentDto[] */
    private array $translations;
    private string $created_at;
    private string $updated_at;


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function isPublish(): bool
    {
        return $this->publish;
    }

    public function setPublish(bool $publish): void
    {
        $this->publish = $publish;
    }

    /**
     * @return array<array-key,string>
     */
    public function getPublishLocations(): array
    {
        return $this->publish_locations;
    }

    /**
     * @param array<array-key,string> $publish_locations
     */
    public function setPublishLocations(array $publish_locations): void
    {
        $this->publish_locations = $publish_locations;
    }

    /**
     * @return ContentDto[]
     */
    public function getTranslations(): array
    {
        return $this->translations;
    }

    /**
     * @param ContentDto[] $translations
     */
    public function setTranslations(array $translations): void
    {
        $this->translations = $translations;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }
}
