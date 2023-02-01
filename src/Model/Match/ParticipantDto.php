<?php

declare(strict_types=1);

namespace Zeggriim\RiotApiLeague\Model\Match;

class ParticipantDto
{
    private int $assists;
    private int $baronKills;
    private int $bountyLevel;
    private int $champExperience;
    private int $champLevel;
    private int $championId;
    private string $championName;
    private int $championTransform;
    private int $consumablesPurchased;
    private int $damageDealtToBuildings;
    private int $damageDealtToObjectives;
    private int $damageDealtToTurrets;
    private int $damageSelfMitigated;
    private int $deaths;
    private int $detectorWardsPlaced;
    private int $doubleKills;
    private int $dragonKills;
    private bool $firstBloodAssist;
    private bool $firstBloodKill;
    private bool $firstTowerAssist;
    private bool $firstTowerKill;
    private bool $gameEndedInEarlySurrender;
    private bool $gameEndedInSurrender;
    private int $goldEarned;
    private int $goldSpent;
    private string $individualPosition;
    private int $inhibitorKills;
    private int $inhibitorTakedowns;
    private int $inhibitorsLost;
    private int $item0;
    private int $item1;
    private int $item2;
    private int $item3;
    private int $item4;
    private int $item5;
    private int $item6;
    private int $itemsPurchased;
    private int $killingSprees;
    private int $kills;
    private string $lane;
    private int $largestCriticalStrike;
    private int $largestKillingSpree;
    private int $largestMultiKill;
    private int $longestTimeSpentLiving;
    private int $magicDamageDealt;
    private int $magicDamageDealtToChampions;
    private int $magicDamageTaken;
    private int $neutralMinionsKilled;
    private int $nexusKills;
    private int $nexusTakedowns;
    private int $nexusLost;
    private int $objectivesStolen;
    private int $objectivesStolenAssists;
    private int $participantId;
    private int $pentaKills;
    private PerksDto $perks;
    private int $physicalDamageDealt;
    private int $physicalDamageDealtToChampions;
    private int $physicalDamageTaken;
    private int $profileIcon;
    private string $puuid;
    private int $quadraKills;
    private string $riotIdName;
    private string $riotIdTagline;
    private string $role;
    private int $sightWardsBoughtInGame;
    private int $spell1Casts;
    private int $spell2Casts;
    private int $spell3Casts;
    private int $spell4Casts;
    private int $summoner1Casts;
    private int $summoner1Id;
    private int $summoner2Casts;
    private int $summoner2Id;
    private string $summonerId;
    private int $summonerLevel;
    private string $summonerName;
    private bool $teamEarlySurrendered;
    private int $teamId;
    private string $teamPosition;
    private int $timeCCingOthers;
    private int $timePlayed;
    private int $totalDamageDealt;
    private int $totalDamageDealtToChampions;
    private int $totalDamageShieldedOnTeammates;
    private int $totalDamageTaken;
    private int $totalHeal;
    private int $totalHealsOnTeammates;
    private int $totalMinionsKilled;
    private int $totalTimeCCDealt;
    private int $totalTimeSpentDead;
    private int $totalUnitsHealed;
    private int $tripleKills;
    private int $trueDamageDealt;
    private int $trueDamageDealtToChampions;
    private int $trueDamageTaken;
    private int $turretKills;
    private int $turretTakedowns;
    private int $turretsLost;
    private int $unrealKills;
    private int $visionScore;
    private int $visionWardsBoughtInGame;
    private int $wardsKilled;
    private int $wardsPlaced;
    private bool $win;

    public function getAssists(): int
    {
        return $this->assists;
    }

    public function setAssists(int $assists): void
    {
        $this->assists = $assists;
    }

    public function getBaronKills(): int
    {
        return $this->baronKills;
    }

    public function setBaronKills(int $baronKills): void
    {
        $this->baronKills = $baronKills;
    }

    public function getBountyLevel(): int
    {
        return $this->bountyLevel;
    }

    public function setBountyLevel(int $bountyLevel): void
    {
        $this->bountyLevel = $bountyLevel;
    }

    public function getChampExperience(): int
    {
        return $this->champExperience;
    }

    public function setChampExperience(int $champExperience): void
    {
        $this->champExperience = $champExperience;
    }

    public function getChampLevel(): int
    {
        return $this->champLevel;
    }

    public function setChampLevel(int $champLevel): void
    {
        $this->champLevel = $champLevel;
    }

    public function getChampionId(): int
    {
        return $this->championId;
    }

    public function setChampionId(int $championId): void
    {
        $this->championId = $championId;
    }

    public function getChampionName(): string
    {
        return $this->championName;
    }

    public function setChampionName(string $championName): void
    {
        $this->championName = $championName;
    }

    public function getChampionTransform(): int
    {
        return $this->championTransform;
    }

    public function setChampionTransform(int $championTransform): void
    {
        $this->championTransform = $championTransform;
    }

    public function getConsumablesPurchased(): int
    {
        return $this->consumablesPurchased;
    }

    public function setConsumablesPurchased(int $consumablesPurchased): void
    {
        $this->consumablesPurchased = $consumablesPurchased;
    }

    public function getDamageDealtToBuildings(): int
    {
        return $this->damageDealtToBuildings;
    }

    public function setDamageDealtToBuildings(int $damageDealtToBuildings): void
    {
        $this->damageDealtToBuildings = $damageDealtToBuildings;
    }

    public function getDamageDealtToObjectives(): int
    {
        return $this->damageDealtToObjectives;
    }

    public function setDamageDealtToObjectives(int $damageDealtToObjectives): void
    {
        $this->damageDealtToObjectives = $damageDealtToObjectives;
    }

    public function getDamageDealtToTurrets(): int
    {
        return $this->damageDealtToTurrets;
    }

    public function setDamageDealtToTurrets(int $damageDealtToTurrets): void
    {
        $this->damageDealtToTurrets = $damageDealtToTurrets;
    }

    public function getDamageSelfMitigated(): int
    {
        return $this->damageSelfMitigated;
    }

    public function setDamageSelfMitigated(int $damageSelfMitigated): void
    {
        $this->damageSelfMitigated = $damageSelfMitigated;
    }

    public function getDeaths(): int
    {
        return $this->deaths;
    }

    public function setDeaths(int $deaths): void
    {
        $this->deaths = $deaths;
    }

    public function getDetectorWardsPlaced(): int
    {
        return $this->detectorWardsPlaced;
    }

    public function setDetectorWardsPlaced(int $detectorWardsPlaced): void
    {
        $this->detectorWardsPlaced = $detectorWardsPlaced;
    }

    public function getDoubleKills(): int
    {
        return $this->doubleKills;
    }

    public function setDoubleKills(int $doubleKills): void
    {
        $this->doubleKills = $doubleKills;
    }

    public function getDragonKills(): int
    {
        return $this->dragonKills;
    }

    public function setDragonKills(int $dragonKills): void
    {
        $this->dragonKills = $dragonKills;
    }

    public function isFirstBloodAssist(): bool
    {
        return $this->firstBloodAssist;
    }

    public function setFirstBloodAssist(bool $firstBloodAssist): void
    {
        $this->firstBloodAssist = $firstBloodAssist;
    }

    public function isFirstBloodKill(): bool
    {
        return $this->firstBloodKill;
    }

    public function setFirstBloodKill(bool $firstBloodKill): void
    {
        $this->firstBloodKill = $firstBloodKill;
    }

    public function isFirstTowerAssist(): bool
    {
        return $this->firstTowerAssist;
    }

    public function setFirstTowerAssist(bool $firstTowerAssist): void
    {
        $this->firstTowerAssist = $firstTowerAssist;
    }

    public function isFirstTowerKill(): bool
    {
        return $this->firstTowerKill;
    }

    public function setFirstTowerKill(bool $firstTowerKill): void
    {
        $this->firstTowerKill = $firstTowerKill;
    }

    public function isGameEndedInEarlySurrender(): bool
    {
        return $this->gameEndedInEarlySurrender;
    }


    public function setGameEndedInEarlySurrender(bool $gameEndedInEarlySurrender): void
    {
        $this->gameEndedInEarlySurrender = $gameEndedInEarlySurrender;
    }

    public function isGameEndedInSurrender(): bool
    {
        return $this->gameEndedInSurrender;
    }

    public function setGameEndedInSurrender(bool $gameEndedInSurrender): void
    {
        $this->gameEndedInSurrender = $gameEndedInSurrender;
    }

    public function getGoldEarned(): int
    {
        return $this->goldEarned;
    }

    public function setGoldEarned(int $goldEarned): void
    {
        $this->goldEarned = $goldEarned;
    }

    public function getGoldSpent(): int
    {
        return $this->goldSpent;
    }

    public function setGoldSpent(int $goldSpent): void
    {
        $this->goldSpent = $goldSpent;
    }

    public function getIndividualPosition(): string
    {
        return $this->individualPosition;
    }

    public function setIndividualPosition(string $individualPosition): void
    {
        $this->individualPosition = $individualPosition;
    }

    public function getInhibitorKills(): int
    {
        return $this->inhibitorKills;
    }

    public function setInhibitorKills(int $inhibitorKills): void
    {
        $this->inhibitorKills = $inhibitorKills;
    }

    public function getInhibitorTakedowns(): int
    {
        return $this->inhibitorTakedowns;
    }

    public function setInhibitorTakedowns(int $inhibitorTakedowns): void
    {
        $this->inhibitorTakedowns = $inhibitorTakedowns;
    }

    public function getInhibitorsLost(): int
    {
        return $this->inhibitorsLost;
    }

    public function setInhibitorsLost(int $inhibitorsLost): void
    {
        $this->inhibitorsLost = $inhibitorsLost;
    }

    public function getItem0(): int
    {
        return $this->item0;
    }

    public function setItem0(int $item0): void
    {
        $this->item0 = $item0;
    }

    public function getItem1(): int
    {
        return $this->item1;
    }

    public function setItem1(int $item1): void
    {
        $this->item1 = $item1;
    }

    public function getItem2(): int
    {
        return $this->item2;
    }

    public function setItem2(int $item2): void
    {
        $this->item2 = $item2;
    }

    public function getItem3(): int
    {
        return $this->item3;
    }

    public function setItem3(int $item3): void
    {
        $this->item3 = $item3;
    }

    public function getItem4(): int
    {
        return $this->item4;
    }

    public function setItem4(int $item4): void
    {
        $this->item4 = $item4;
    }

    public function getItem5(): int
    {
        return $this->item5;
    }

    public function setItem5(int $item5): void
    {
        $this->item5 = $item5;
    }

    public function getItem6(): int
    {
        return $this->item6;
    }

    public function setItem6(int $item6): void
    {
        $this->item6 = $item6;
    }

    public function getItemsPurchased(): int
    {
        return $this->itemsPurchased;
    }

    public function setItemsPurchased(int $itemsPurchased): void
    {
        $this->itemsPurchased = $itemsPurchased;
    }

    public function getKillingSprees(): int
    {
        return $this->killingSprees;
    }

    public function setKillingSprees(int $killingSprees): void
    {
        $this->killingSprees = $killingSprees;
    }

    public function getKills(): int
    {
        return $this->kills;
    }

    public function setKills(int $kills): void
    {
        $this->kills = $kills;
    }

    public function getLane(): string
    {
        return $this->lane;
    }

    public function setLane(string $lane): void
    {
        $this->lane = $lane;
    }

    public function getLargestCriticalStrike(): int
    {
        return $this->largestCriticalStrike;
    }

    public function setLargestCriticalStrike(int $largestCriticalStrike): void
    {
        $this->largestCriticalStrike = $largestCriticalStrike;
    }

    public function getLargestKillingSpree(): int
    {
        return $this->largestKillingSpree;
    }

    public function setLargestKillingSpree(int $largestKillingSpree): void
    {
        $this->largestKillingSpree = $largestKillingSpree;
    }

    public function getLargestMultiKill(): int
    {
        return $this->largestMultiKill;
    }

    public function setLargestMultiKill(int $largestMultiKill): void
    {
        $this->largestMultiKill = $largestMultiKill;
    }

    public function getLongestTimeSpentLiving(): int
    {
        return $this->longestTimeSpentLiving;
    }

    public function setLongestTimeSpentLiving(int $longestTimeSpentLiving): void
    {
        $this->longestTimeSpentLiving = $longestTimeSpentLiving;
    }

    public function getMagicDamageDealt(): int
    {
        return $this->magicDamageDealt;
    }

    public function setMagicDamageDealt(int $magicDamageDealt): void
    {
        $this->magicDamageDealt = $magicDamageDealt;
    }

    public function getMagicDamageDealtToChampions(): int
    {
        return $this->magicDamageDealtToChampions;
    }

    public function setMagicDamageDealtToChampions(int $magicDamageDealtToChampions): void
    {
        $this->magicDamageDealtToChampions = $magicDamageDealtToChampions;
    }

    public function getMagicDamageTaken(): int
    {
        return $this->magicDamageTaken;
    }

    public function setMagicDamageTaken(int $magicDamageTaken): void
    {
        $this->magicDamageTaken = $magicDamageTaken;
    }

    public function getNeutralMinionsKilled(): int
    {
        return $this->neutralMinionsKilled;
    }

    public function setNeutralMinionsKilled(int $neutralMinionsKilled): void
    {
        $this->neutralMinionsKilled = $neutralMinionsKilled;
    }

    public function getNexusKills(): int
    {
        return $this->nexusKills;
    }

    public function setNexusKills(int $nexusKills): void
    {
        $this->nexusKills = $nexusKills;
    }

    public function getNexusTakedowns(): int
    {
        return $this->nexusTakedowns;
    }

    public function setNexusTakedowns(int $nexusTakedowns): void
    {
        $this->nexusTakedowns = $nexusTakedowns;
    }

    public function getNexusLost(): int
    {
        return $this->nexusLost;
    }

    public function setNexusLost(int $nexusLost): void
    {
        $this->nexusLost = $nexusLost;
    }

    public function getObjectivesStolen(): int
    {
        return $this->objectivesStolen;
    }

    public function setObjectivesStolen(int $objectivesStolen): void
    {
        $this->objectivesStolen = $objectivesStolen;
    }

    public function getObjectivesStolenAssists(): int
    {
        return $this->objectivesStolenAssists;
    }

    public function setObjectivesStolenAssists(int $objectivesStolenAssists): void
    {
        $this->objectivesStolenAssists = $objectivesStolenAssists;
    }

    public function getParticipantId(): int
    {
        return $this->participantId;
    }

    public function setParticipantId(int $participantId): void
    {
        $this->participantId = $participantId;
    }

    public function getPentaKills(): int
    {
        return $this->pentaKills;
    }

    public function setPentaKills(int $pentaKills): void
    {
        $this->pentaKills = $pentaKills;
    }

    public function getPerks(): PerksDto
    {
        return $this->perks;
    }

    public function setPerks(PerksDto $perks): void
    {
        $this->perks = $perks;
    }

    public function getPhysicalDamageDealt(): int
    {
        return $this->physicalDamageDealt;
    }

    public function setPhysicalDamageDealt(int $physicalDamageDealt): void
    {
        $this->physicalDamageDealt = $physicalDamageDealt;
    }

    public function getPhysicalDamageDealtToChampions(): int
    {
        return $this->physicalDamageDealtToChampions;
    }

    public function setPhysicalDamageDealtToChampions(int $physicalDamageDealtToChampions): void
    {
        $this->physicalDamageDealtToChampions = $physicalDamageDealtToChampions;
    }

    public function getPhysicalDamageTaken(): int
    {
        return $this->physicalDamageTaken;
    }

    public function setPhysicalDamageTaken(int $physicalDamageTaken): void
    {
        $this->physicalDamageTaken = $physicalDamageTaken;
    }

    public function getProfileIcon(): int
    {
        return $this->profileIcon;
    }

    public function setProfileIcon(int $profileIcon): void
    {
        $this->profileIcon = $profileIcon;
    }

    public function getPuuid(): string
    {
        return $this->puuid;
    }

    public function setPuuid(string $puuid): void
    {
        $this->puuid = $puuid;
    }

    public function getQuadraKills(): int
    {
        return $this->quadraKills;
    }

    public function setQuadraKills(int $quadraKills): void
    {
        $this->quadraKills = $quadraKills;
    }

    public function getRiotIdName(): string
    {
        return $this->riotIdName;
    }

    public function setRiotIdName(string $riotIdName): void
    {
        $this->riotIdName = $riotIdName;
    }

    public function getRiotIdTagline(): string
    {
        return $this->riotIdTagline;
    }

    public function setRiotIdTagline(string $riotIdTagline): void
    {
        $this->riotIdTagline = $riotIdTagline;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    public function getSightWardsBoughtInGame(): int
    {
        return $this->sightWardsBoughtInGame;
    }

    public function setSightWardsBoughtInGame(int $sightWardsBoughtInGame): void
    {
        $this->sightWardsBoughtInGame = $sightWardsBoughtInGame;
    }

    public function getSpell1Casts(): int
    {
        return $this->spell1Casts;
    }

    public function setSpell1Casts(int $spell1Casts): void
    {
        $this->spell1Casts = $spell1Casts;
    }

    public function getSpell2Casts(): int
    {
        return $this->spell2Casts;
    }

    public function setSpell2Casts(int $spell2Casts): void
    {
        $this->spell2Casts = $spell2Casts;
    }

    public function getSpell3Casts(): int
    {
        return $this->spell3Casts;
    }

    public function setSpell3Casts(int $spell3Casts): void
    {
        $this->spell3Casts = $spell3Casts;
    }

    public function getSpell4Casts(): int
    {
        return $this->spell4Casts;
    }

    public function setSpell4Casts(int $spell4Casts): void
    {
        $this->spell4Casts = $spell4Casts;
    }

    public function getSummoner1Casts(): int
    {
        return $this->summoner1Casts;
    }

    public function setSummoner1Casts(int $summoner1Casts): void
    {
        $this->summoner1Casts = $summoner1Casts;
    }

    public function getSummoner1Id(): int
    {
        return $this->summoner1Id;
    }

    public function setSummoner1Id(int $summoner1Id): void
    {
        $this->summoner1Id = $summoner1Id;
    }

    public function getSummoner2Casts(): int
    {
        return $this->summoner2Casts;
    }

    public function setSummoner2Casts(int $summoner2Casts): void
    {
        $this->summoner2Casts = $summoner2Casts;
    }

    public function getSummoner2Id(): int
    {
        return $this->summoner2Id;
    }

    public function setSummoner2Id(int $summoner2Id): void
    {
        $this->summoner2Id = $summoner2Id;
    }

    public function getSummonerId(): string
    {
        return $this->summonerId;
    }

    public function setSummonerId(string $summonerId): void
    {
        $this->summonerId = $summonerId;
    }

    public function getSummonerLevel(): int
    {
        return $this->summonerLevel;
    }

    public function setSummonerLevel(int $summonerLevel): void
    {
        $this->summonerLevel = $summonerLevel;
    }

    public function getSummonerName(): string
    {
        return $this->summonerName;
    }

    public function setSummonerName(string $summonerName): void
    {
        $this->summonerName = $summonerName;
    }

    public function isTeamEarlySurrendered(): bool
    {
        return $this->teamEarlySurrendered;
    }

    public function setTeamEarlySurrendered(bool $teamEarlySurrendered): void
    {
        $this->teamEarlySurrendered = $teamEarlySurrendered;
    }

    public function getTeamId(): int
    {
        return $this->teamId;
    }

    public function setTeamId(int $teamId): void
    {
        $this->teamId = $teamId;
    }

    public function getTeamPosition(): string
    {
        return $this->teamPosition;
    }

    public function setTeamPosition(string $teamPosition): void
    {
        $this->teamPosition = $teamPosition;
    }

    public function getTimeCCingOthers(): int
    {
        return $this->timeCCingOthers;
    }

    public function setTimeCCingOthers(int $timeCCingOthers): void
    {
        $this->timeCCingOthers = $timeCCingOthers;
    }

    public function getTimePlayed(): int
    {
        return $this->timePlayed;
    }

    public function setTimePlayed(int $timePlayed): void
    {
        $this->timePlayed = $timePlayed;
    }

    public function getTotalDamageDealt(): int
    {
        return $this->totalDamageDealt;
    }

    public function setTotalDamageDealt(int $totalDamageDealt): void
    {
        $this->totalDamageDealt = $totalDamageDealt;
    }

    public function getTotalDamageDealtToChampions(): int
    {
        return $this->totalDamageDealtToChampions;
    }

    public function setTotalDamageDealtToChampions(int $totalDamageDealtToChampions): void
    {
        $this->totalDamageDealtToChampions = $totalDamageDealtToChampions;
    }

    public function getTotalDamageShieldedOnTeammates(): int
    {
        return $this->totalDamageShieldedOnTeammates;
    }

    public function setTotalDamageShieldedOnTeammates(int $totalDamageShieldedOnTeammates): void
    {
        $this->totalDamageShieldedOnTeammates = $totalDamageShieldedOnTeammates;
    }

    public function getTotalDamageTaken(): int
    {
        return $this->totalDamageTaken;
    }

    public function setTotalDamageTaken(int $totalDamageTaken): void
    {
        $this->totalDamageTaken = $totalDamageTaken;
    }

    public function getTotalHeal(): int
    {
        return $this->totalHeal;
    }

    public function setTotalHeal(int $totalHeal): void
    {
        $this->totalHeal = $totalHeal;
    }

    public function getTotalHealsOnTeammates(): int
    {
        return $this->totalHealsOnTeammates;
    }

    public function setTotalHealsOnTeammates(int $totalHealsOnTeammates): void
    {
        $this->totalHealsOnTeammates = $totalHealsOnTeammates;
    }

    public function getTotalMinionsKilled(): int
    {
        return $this->totalMinionsKilled;
    }

    public function setTotalMinionsKilled(int $totalMinionsKilled): void
    {
        $this->totalMinionsKilled = $totalMinionsKilled;
    }

    public function getTotalTimeCCDealt(): int
    {
        return $this->totalTimeCCDealt;
    }

    public function setTotalTimeCCDealt(int $totalTimeCCDealt): void
    {
        $this->totalTimeCCDealt = $totalTimeCCDealt;
    }

    public function getTotalTimeSpentDead(): int
    {
        return $this->totalTimeSpentDead;
    }

    public function setTotalTimeSpentDead(int $totalTimeSpentDead): void
    {
        $this->totalTimeSpentDead = $totalTimeSpentDead;
    }

    public function getTotalUnitsHealed(): int
    {
        return $this->totalUnitsHealed;
    }

    public function setTotalUnitsHealed(int $totalUnitsHealed): void
    {
        $this->totalUnitsHealed = $totalUnitsHealed;
    }

    public function getTripleKills(): int
    {
        return $this->tripleKills;
    }

    public function setTripleKills(int $tripleKills): void
    {
        $this->tripleKills = $tripleKills;
    }

    public function getTrueDamageDealt(): int
    {
        return $this->trueDamageDealt;
    }

    public function setTrueDamageDealt(int $trueDamageDealt): void
    {
        $this->trueDamageDealt = $trueDamageDealt;
    }

    public function getTrueDamageDealtToChampions(): int
    {
        return $this->trueDamageDealtToChampions;
    }

    public function setTrueDamageDealtToChampions(int $trueDamageDealtToChampions): void
    {
        $this->trueDamageDealtToChampions = $trueDamageDealtToChampions;
    }

    public function getTrueDamageTaken(): int
    {
        return $this->trueDamageTaken;
    }

    public function setTrueDamageTaken(int $trueDamageTaken): void
    {
        $this->trueDamageTaken = $trueDamageTaken;
    }

    public function getTurretKills(): int
    {
        return $this->turretKills;
    }

    public function setTurretKills(int $turretKills): void
    {
        $this->turretKills = $turretKills;
    }

    public function getTurretTakedowns(): int
    {
        return $this->turretTakedowns;
    }

    public function setTurretTakedowns(int $turretTakedowns): void
    {
        $this->turretTakedowns = $turretTakedowns;
    }

    public function getTurretsLost(): int
    {
        return $this->turretsLost;
    }

    public function setTurretsLost(int $turretsLost): void
    {
        $this->turretsLost = $turretsLost;
    }

    public function getUnrealKills(): int
    {
        return $this->unrealKills;
    }

    public function setUnrealKills(int $unrealKills): void
    {
        $this->unrealKills = $unrealKills;
    }

    public function getVisionScore(): int
    {
        return $this->visionScore;
    }

    public function setVisionScore(int $visionScore): void
    {
        $this->visionScore = $visionScore;
    }

    public function getVisionWardsBoughtInGame(): int
    {
        return $this->visionWardsBoughtInGame;
    }

    public function setVisionWardsBoughtInGame(int $visionWardsBoughtInGame): void
    {
        $this->visionWardsBoughtInGame = $visionWardsBoughtInGame;
    }

    public function getWardsKilled(): int
    {
        return $this->wardsKilled;
    }

    public function setWardsKilled(int $wardsKilled): void
    {
        $this->wardsKilled = $wardsKilled;
    }

    public function getWardsPlaced(): int
    {
        return $this->wardsPlaced;
    }

    public function setWardsPlaced(int $wardsPlaced): void
    {
        $this->wardsPlaced = $wardsPlaced;
    }

    public function isWin(): bool
    {
        return $this->win;
    }

    public function setWin(bool $win): void
    {
        $this->win = $win;
    }
}