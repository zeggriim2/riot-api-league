<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Zeggriim\RiotApiDatadragon\Enum\Platform;
use Zeggriim\RiotApiLeague\Model\Match\BanDto;
use Zeggriim\RiotApiLeague\Model\Match\FrameTimeLineDto;
use Zeggriim\RiotApiLeague\Model\Match\InfoDto;
use Zeggriim\RiotApiLeague\Model\Match\InfoTimeLineDto;
use Zeggriim\RiotApiLeague\Model\Match\MatchDto;
use Zeggriim\RiotApiLeague\Model\Match\MatchTimeLineDto;
use Zeggriim\RiotApiLeague\Model\Match\MetadataDto;
use Zeggriim\RiotApiLeague\Model\Match\ObjectiveDto;
use Zeggriim\RiotApiLeague\Model\Match\ObjectivesDto;
use Zeggriim\RiotApiLeague\Model\Match\ParticipantDto;
use Zeggriim\RiotApiLeague\Model\Match\ParticipantTimeLineDto;
use Zeggriim\RiotApiLeague\Model\Match\PerksDto;
use Zeggriim\RiotApiLeague\Model\Match\PerkStatsDto;
use Zeggriim\RiotApiLeague\Model\Match\PerkStyleDto;
use Zeggriim\RiotApiLeague\Model\Match\PerkStyleSelectionDto;
use Zeggriim\RiotApiLeague\Model\Match\TeamDto;
use Zeggriim\RiotApiLeague\Riot\RiotApi;

class MatchApiTest extends TestCase
{
    private RiotApi $riotApi;

    protected function setUp(): void
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $this->riotApi = new RiotApi(Platform::EUW1, $_ENV['APIKEY']);
    }

    public function testGetMatchBySummonerPuuid()
    {
        $matchIds = $this->riotApi->getMatch()->getMatchBySummonerPuuid(
            "NFLqmQ-TfqzILQI1aYhPTIBn6FG1Ox3QYT2sCGDRQNlEQC8MVIzkOjw2VAncGE70VF-L4ptfaUxEUw"
        );

        $this->assertIsArray($matchIds);
    }

    public function testGetMatchById()
    {
        $match = $this->riotApi->getMatch()->getMatchById("EUW1_6151603461");
        $this->assertInstanceOf(MatchDto::class,$match);
        $this->assertMatchDto($match);
    }

    public function testGetMatchTimeLineId()
    {
        $matchTimeLine = $this->riotApi->getMatch()->getMatchTimeLineById("EUW1_6151603461");
        $this->assertInstanceOf(MatchTimeLineDto::class,$matchTimeLine);
        $this->assertMatchTimeLineDto($matchTimeLine);

    }

    private function assertMatchTimeLineDto(MatchTimeLineDto $matchTimeLineDto)
    {
        $this->assertMetadataDto($matchTimeLineDto->getMetadata());
        $this->assertInfoTimeLineDto($matchTimeLineDto->getInfo());
    }

    private function assertInfoTimeLineDto(InfoTimeLineDto $infoTimeLineDto)
    {
        $this->assertIsInt($infoTimeLineDto->getFrameInterval());
        foreach ($infoTimeLineDto->getFrames() as $frameTimeLineDto)
        {
            $this->assertFrameTimeLineDto($frameTimeLineDto);
        }
        $this->assertIsInt($infoTimeLineDto->getGameId());
        foreach ($infoTimeLineDto->getParticipants() as $participant)
        {
            $this->assertParticipantTimeLineDto($participant);
        }
    }

    private function assertFrameTimeLineDto(FrameTimeLineDto $frameTimeLineDto)
    {
        $this->assertIsArray($frameTimeLineDto->getEvents());
        $this->assertIsArray($frameTimeLineDto->getParticipantFrames());
        $this->assertIsInt($frameTimeLineDto->getTimestamp());
    }

    private function assertParticipantTimeLineDto(ParticipantTimeLineDto $participantTimeLineDto)
    {
        $this->assertIsString($participantTimeLineDto->getPuuid());
        $this->assertIsInt($participantTimeLineDto->getParticipantId());
    }

    private function assertMatchDto(MatchDto $matchDto)
    {
        $this->assertMetadataDto($matchDto->getMetadata());
        $this->assertInfoDto($matchDto->getInfo());
    }

    private function assertMetadataDto(MetadataDto $metadataDto)
    {
        $this->assertIsString($metadataDto->getDataVersion());
        $this->assertIsString($metadataDto->getMatchId());
        $this->assertIsArray($metadataDto->getParticipants());
    }

    private function assertInfoDto(InfoDto $infoDto)
    {
        $this->assertIsInt($infoDto->getGameCreation());
        $this->assertIsInt($infoDto->getGameDuration());
        $this->assertIsInt($infoDto->getGameEndTimestamp());
        $this->assertIsInt($infoDto->getGameId());
        $this->assertIsString($infoDto->getGameMode());
        $this->assertIsString($infoDto->getGameName());
        $this->assertIsInt($infoDto->getGameStartTimestamp());
        $this->assertIsString($infoDto->getGameType());
        $this->assertIsString($infoDto->getGameVersion());
        $this->assertIsInt($infoDto->getMapId());
        foreach ($infoDto->getParticipants() as $participantDto) {
            $this->assertParticipantDto($participantDto);
        }
        $this->assertIsString($infoDto->getPlatformId());
        $this->assertIsInt($infoDto->getQueueId());
        foreach ($infoDto->getTeams() as $teamDto) {
            $this->assertTeamDto($teamDto);
        }
        $this->assertIsString($infoDto->getTournamentCode());
    }

    private function assertParticipantDto(ParticipantDto $participantDto)
    {
        $this->assertIsInt($participantDto->getAssists());
        $this->assertIsInt($participantDto->getBaronKills());
        $this->assertIsInt($participantDto->getBountyLevel());
        $this->assertIsInt($participantDto->getChampExperience());
        $this->assertIsInt($participantDto->getChampLevel());
        $this->assertIsInt($participantDto->getChampionId());
        $this->assertIsString($participantDto->getChampionName());
        $this->assertIsInt($participantDto->getChampionTransform());
        $this->assertIsInt($participantDto->getConsumablesPurchased());
        $this->assertIsInt($participantDto->getDamageDealtToBuildings());
        $this->assertIsInt($participantDto->getDamageDealtToObjectives());
        $this->assertIsInt($participantDto->getDamageDealtToTurrets());
        $this->assertIsInt($participantDto->getDamageSelfMitigated());
        $this->assertIsInt($participantDto->getDeaths());
        $this->assertIsInt($participantDto->getDetectorWardsPlaced());
        $this->assertIsInt($participantDto->getDoubleKills());
        $this->assertIsInt($participantDto->getDragonKills());
        $this->assertIsBool($participantDto->isFirstBloodAssist());
        $this->assertIsBool($participantDto->isFirstBloodKill());
        $this->assertIsBool($participantDto->isFirstTowerAssist());
        $this->assertIsBool($participantDto->isFirstTowerKill());
        $this->assertIsBool($participantDto->isGameEndedInEarlySurrender());
        $this->assertIsBool($participantDto->isGameEndedInSurrender());
        $this->assertIsInt($participantDto->getGoldEarned());
        $this->assertIsInt($participantDto->getGoldSpent());
        $this->assertIsString($participantDto->getIndividualPosition());
        $this->assertIsInt($participantDto->getInhibitorKills());
        $this->assertIsInt($participantDto->getInhibitorTakedowns());
        $this->assertIsInt($participantDto->getInhibitorsLost());
        $this->assertIsInt($participantDto->getItem0());
        $this->assertIsInt($participantDto->getItem1());
        $this->assertIsInt($participantDto->getItem2());
        $this->assertIsInt($participantDto->getItem3());
        $this->assertIsInt($participantDto->getItem4());
        $this->assertIsInt($participantDto->getItem5());
        $this->assertIsInt($participantDto->getItem6());
        $this->assertIsInt($participantDto->getItemsPurchased());
        $this->assertIsInt($participantDto->getKillingSprees());
        $this->assertIsInt($participantDto->getKills());
        $this->assertIsString($participantDto->getLane());
        $this->assertIsInt($participantDto->getLargestCriticalStrike());
        $this->assertIsInt($participantDto->getLargestKillingSpree());
        $this->assertIsInt($participantDto->getLargestMultiKill());
        $this->assertIsInt($participantDto->getLongestTimeSpentLiving());
        $this->assertIsInt($participantDto->getMagicDamageDealt());
        $this->assertIsInt($participantDto->getMagicDamageDealtToChampions());
        $this->assertIsInt($participantDto->getMagicDamageTaken());
        $this->assertIsInt($participantDto->getNeutralMinionsKilled());
        $this->assertIsInt($participantDto->getNexusKills());
        $this->assertIsInt($participantDto->getNexusTakedowns());
        $this->assertIsInt($participantDto->getNexusLost());
        $this->assertIsInt($participantDto->getObjectivesStolen());
        $this->assertIsInt($participantDto->getObjectivesStolenAssists());
        $this->assertIsInt($participantDto->getParticipantId());
        $this->assertIsInt($participantDto->getPentaKills());
        $this->assertPerksDto($participantDto->getPerks());
        $this->assertIsInt($participantDto->getPhysicalDamageDealt());
        $this->assertIsInt($participantDto->getPhysicalDamageDealtToChampions());
        $this->assertIsInt($participantDto->getPhysicalDamageTaken());
        $this->assertIsInt($participantDto->getProfileIcon());
        $this->assertIsString($participantDto->getPuuid());
        $this->assertIsInt($participantDto->getQuadraKills());
        $this->assertIsString($participantDto->getRiotIdName());
        $this->assertIsString($participantDto->getRiotIdTagline());
        $this->assertIsString($participantDto->getRole());
        $this->assertIsInt($participantDto->getSightWardsBoughtInGame());
        $this->assertIsInt($participantDto->getSpell1Casts());
        $this->assertIsInt($participantDto->getSpell2Casts());
        $this->assertIsInt($participantDto->getSpell3Casts());
        $this->assertIsInt($participantDto->getSpell4Casts());
        $this->assertIsInt($participantDto->getSummoner1Casts());
        $this->assertIsInt($participantDto->getSummoner1Id());
        $this->assertIsInt($participantDto->getSummoner2Casts());
        $this->assertIsInt($participantDto->getSummoner2Id());
        $this->assertIsString($participantDto->getSummonerId());
        $this->assertIsInt($participantDto->getSummonerLevel());
        $this->assertIsString($participantDto->getSummonerName());
        $this->assertIsBool($participantDto->isTeamEarlySurrendered());
        $this->assertIsInt($participantDto->getTeamId());
        $this->assertIsString($participantDto->getTeamPosition());
        $this->assertIsInt($participantDto->getTimeCCingOthers());
        $this->assertIsInt($participantDto->getTimePlayed());
        $this->assertIsInt($participantDto->getTotalDamageDealt());
        $this->assertIsInt($participantDto->getTotalDamageDealtToChampions());
        $this->assertIsInt($participantDto->getTotalDamageShieldedOnTeammates());
        $this->assertIsInt($participantDto->getTotalDamageTaken());
        $this->assertIsInt($participantDto->getTotalHeal());
        $this->assertIsInt($participantDto->getTotalHealsOnTeammates());
        $this->assertIsInt($participantDto->getTotalMinionsKilled());
        $this->assertIsInt($participantDto->getTotalTimeCCDealt());
        $this->assertIsInt($participantDto->getTotalTimeSpentDead());
        $this->assertIsInt($participantDto->getTotalUnitsHealed());
        $this->assertIsInt($participantDto->getTripleKills());
        $this->assertIsInt($participantDto->getTrueDamageDealt());
        $this->assertIsInt($participantDto->getTrueDamageDealtToChampions());
        $this->assertIsInt($participantDto->getTrueDamageTaken());
        $this->assertIsInt($participantDto->getTurretKills());
        $this->assertIsInt($participantDto->getTurretTakedowns());
        $this->assertIsInt($participantDto->getTurretsLost());
        $this->assertIsInt($participantDto->getUnrealKills());
        $this->assertIsInt($participantDto->getVisionScore());
        $this->assertIsInt($participantDto->getVisionWardsBoughtInGame());
        $this->assertIsInt($participantDto->getWardsKilled());
        $this->assertIsInt($participantDto->getWardsPlaced());
        $this->assertIsBool($participantDto->isWin());
    }

    private function assertPerksDto(PerksDto $perksDto)
    {
        $this->assertPerkStatsDto($perksDto->getStatPerks());
        foreach ($perksDto->getStyles() as $style) {
            $this->assertPerkStyleDto($style);
        }

    }

    private function assertPerkStatsDto(PerkStatsDto $perkStatsDto)
    {
        $this->assertIsInt($perkStatsDto->getDefense());
        $this->assertIsInt($perkStatsDto->getFlex());
        $this->assertIsInt($perkStatsDto->getOffense());
    }

    private function assertPerkStyleDto(PerkStyleDto $perkStyleDto)
    {
        $this->assertIsString($perkStyleDto->getDescription());
        foreach ($perkStyleDto->getSelections() as $selection)
        {
            $this->assertPerkStyleSelectionDto($selection);
        }
        $this->assertIsInt($perkStyleDto->getStyle());
    }

    private function assertPerkStyleSelectionDto(PerkStyleSelectionDto $perkStyleSelectionDto)
    {
        $this->assertIsInt($perkStyleSelectionDto->getPerk());
        $this->assertIsInt($perkStyleSelectionDto->getVar1());
        $this->assertIsInt($perkStyleSelectionDto->getVar2());
        $this->assertIsInt($perkStyleSelectionDto->getVar3());
    }

    private function assertTeamDto(TeamDto $teamDto)
    {
        foreach($teamDto->getBans() as $ban){
            $this->assertBanDto($ban);
        }
        $this->assertObjectivesDto($teamDto->getObjectives());
        $this->assertIsInt($teamDto->getTeamId());
        $this->assertIsBool($teamDto->isWin());
    }

    private function assertBanDto(BanDto $banDto)
    {
        $this->assertIsInt($banDto->getChampionId());
        $this->assertIsInt($banDto->getPickTurn());
    }

    private function assertObjectivesDto(ObjectivesDto $objectivesDto)
    {
        $this->assertObjectiveDto($objectivesDto->getBaron());
        $this->assertObjectiveDto($objectivesDto->getChampion());
        $this->assertObjectiveDto($objectivesDto->getDragon());
        $this->assertObjectiveDto($objectivesDto->getInhibitor());
        $this->assertObjectiveDto($objectivesDto->getRiftHerald());
        $this->assertObjectiveDto($objectivesDto->getTower());
    }

    private function assertObjectiveDto(ObjectiveDto $objectiveDto)
    {
        $this->assertIsInt($objectiveDto->getKills());
        $this->assertIsBool($objectiveDto->isFirst());
    }
}