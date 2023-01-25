<?php

use Zeggriim\RiotApiDatadragon\Enum\Languages;
use Zeggriim\RiotApiDatadragon\Enum\Platform;
use Zeggriim\RiotApiLeague\Riot\RiotApi;

require_once 'vendor/autoload.php';

$api = new RiotApi(Platform::EUW1, "RGAPI-26a61997-5fc5-41df-b38d-cbffe2f9e8f4");
$api->getSummoner('jarkalien');