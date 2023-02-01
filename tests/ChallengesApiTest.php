<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Zeggriim\RiotApiDatadragon\Enum\Platform;
use Zeggriim\RiotApiLeague\Model\Challenges\ChallengeConfigInfoDto;
use Zeggriim\RiotApiLeague\Model\Challenges\ChallengePointsDto;
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
        $this->assertIsArray($challengeConfig);
        $this->assertContainsOnlyInstancesOf(ChallengeConfigInfoDto::class, $challengeConfig);
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
        $this->assertChallengeConfigInfoDto($challengeConfig);
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
        $this->assertPlayerInfoDto($challengerPlayerData);
    }

    private function assertChallengeConfigInfoDto(ChallengeConfigInfoDto $challengeConfigInfoDto)
    {
        $this->assertIsInt($challengeConfigInfoDto->getId());
        $this->assertIsArray($challengeConfigInfoDto->getLocalizedNames());
        $this->assertIsString($challengeConfigInfoDto->getState());
        $this->assertNullOrIsInt($challengeConfigInfoDto->getStartTimestamp());
        $this->assertNullOrIsInt($challengeConfigInfoDto->getEndTimestamp());
        $this->assertIsBool($challengeConfigInfoDto->isLeaderboard());
        $this->assertIsArray($challengeConfigInfoDto->getThresholds());
    }

    private function assertPlayerInfoDto(PlayerInfoDto $playerInfoDto)
    {
        $this->assertIsArray($playerInfoDto->getChallenges());
        $this->assertIsArray($playerInfoDto->getPreferences());
        $this->assertIsArray($playerInfoDto->getCategoryPoints());
        $this->assertChallengePointsDto($playerInfoDto->getTotalPoints());
    }

    private function assertChallengePointsDto(ChallengePointsDto $challengePointsDto)
    {
        $this->assertIsString($challengePointsDto->getLevel());
        $this->assertIsInt($challengePointsDto->getCurrent());
        $this->assertIsInt($challengePointsDto->getMax());
        if(is_int($challengePointsDto->getPercentile())){
            $this->assertIsInt($challengePointsDto->getPercentile());
        }else{
            $this->assertIsFloat($challengePointsDto->getPercentile());
        }
    }

    private function assertNullOrIsInt(?int $actual)
    {
        if(is_int($actual)){
            $this->assertIsInt($actual);
        }else{
            $this->assertNull($actual);
        }
    }
}