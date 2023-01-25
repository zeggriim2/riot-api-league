<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Zeggriim\RiotApiDatadragon\Enum\Platform;
use Zeggriim\RiotApiLeague\Model\Challenges\ChallengeConfigInfoDto;
use Zeggriim\RiotApiLeague\Model\Challenges\PlayerInfoDto;
use Zeggriim\RiotApiLeague\Riot\RiotApi;

class ChallengesApiTest extends TestCase
{
    private RiotApi $riotApi;

    protected function setUp(): void
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $this->riotApi = new RiotApi(Platform::EUW1, $_ENV['APIKEY']);
    }

    public function testGetChallengesConfig()
    {
        $challengeConfig = $this->riotApi->getChallenges()->getChallengesConfig();
        $this->assertInstanceOf(ChallengeConfigInfoDto::class, $challengeConfig);
    }

    public function testGetChallengesPercentiles()
    {
        $challengePercentiles = $this->riotApi->getChallenges()->getChallengesPercentiles();
        $this->assertIsArray($challengePercentiles);
        $this->assertCount(count($challengePercentiles), $challengePercentiles);
    }

    /**
     * @dataProvider providerChallengesByChallengeId
     */
    public function testGetChallengesByChallengeId($challengeId)
    {
        $challengeConfig = $this->riotApi->getChallenges()->getChallengesByChallengeId($challengeId);
        $this->assertInstanceOf(ChallengeConfigInfoDto::class, $challengeConfig);
    }

    public function providerChallengesByChallengeId(): array
    {
        return [
            "Challenge ID Integer" => [4],
            "Challenge ID String" => ["4"],
        ];
    }

    /**
     * @dataProvider providerChallengesPercentileByChallengeId
     */
    public function testGetChallengesPercentileByChallengeId($challengerId)
    {
        $challengerPercentile = $this->riotApi->getChallenges()->getChallengesPercentileByChallengeId($challengerId);
        $this->assertIsArray($challengerPercentile);
    }

    public function providerChallengesPercentileByChallengeId(): array
    {
        return [
            "Challenge challenger ID Integer" => [101105],
            "Challenge challenger ID String" => ["101105"],
        ];
    }

    public function testGetChallengesPlayerData()
    {
        $challengerPlayerData = $this->riotApi->getChallenges()->getChallengesPlayerData(
            "NFLqmQ-TfqzILQI1aYhPTIBn6FG1Ox3QYT2sCGDRQNlEQC8MVIzkOjw2VAncGE70VF-L4ptfaUxEUw"
        );
        $this->assertInstanceOf(PlayerInfoDto::class,$challengerPlayerData);
    }

}