<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class MatchDto
{
    private MetadataDto $metadata;
    private InfoDto $info;

    public function getMetadata(): MetadataDto
    {
        return $this->metadata;
    }

    public function setMetadata(MetadataDto $metadata): void
    {
        $this->metadata = $metadata;
    }

    public function getInfo(): InfoDto
    {
        return $this->info;
    }

    public function setInfo(InfoDto $info): void
    {
        $this->info = $info;
    }
}
