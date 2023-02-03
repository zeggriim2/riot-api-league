<?php

namespace Zeggriim\RiotApiLeague\Riot\Traits;

use Zeggriim\RiotApiDatadragon\Serializer\Denormalizer;

trait ApiTrait
{
    public function call(
        string $url,
        array $headers = [],
        array $query = [],
        $type = null,
        bool $isArray = false
    ) {
        $options = $this->headerToken();
        if (count($headers) > 0) {
            $options['headers'] = $headers;
        }
        if (count($headers) > 0) {
            $options['query'] = $query;
        }

        $datas = $this->makeCall($url, options: $options);

        if (!is_array($datas) || is_null($type)) {
            return $datas;
        }

        $denormalize = new Denormalizer();

        if ($isArray) {
            $objetArray = [];
            foreach ($datas as $data) {
                $objetArray[] = $denormalize->denormalize($data, $type);
            }
            return $objetArray;
        }
        return $denormalize->denormalize($datas, $type);
    }

    private function headerToken(): array
    {
        return [
            "headers" => [
                "X-Riot-Token" => $this->apiKey,
            ],
        ];
    }
}
