<?php

use Zeggriim\RiotApiDatadragon\Enum\Platform;
use Zeggriim\RiotApiLeague\Riot\RiotApi;

require_once 'vendor/autoload.php';

$api = new RiotApi(Platform::EUW1, 'RGAPI-26a61997-5fc5-41df-b38d-cbffe2f9e8f4');

$test = $api->getChampionMastery()->getChampionMasterieTopBySummunerId('tSmVTVjydJYj5gbjMy8IhFkyMpgWhc4JNdH4ZbqHal3maT4', 5);
dd($test->getInfo());
