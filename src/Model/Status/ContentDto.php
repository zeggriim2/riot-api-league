<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Status;

class ContentDto
{
    private string $locale;
    private string $content;

    public function getLocale(): string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): void
    {
        $this->locale = $locale;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}