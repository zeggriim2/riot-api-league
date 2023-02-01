<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class MatchTimeLineDto
{
    private MetadataDto $metadata;
    private InfoTimeLineDto $info;

    public function getMetadata(): MetadataDto
    {
        return $this->metadata;
    }

    public function setMetadata(MetadataDto $metadata): void
    {
        $this->metadata = $metadata;
    }

    public function getInfo(): InfoTimeLineDto
    {
        return $this->info;
    }

    public function setInfo(InfoTimeLineDto $info): void
    {
        $this->info = $info;
    }
}