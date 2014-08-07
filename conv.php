<?php
// 轉換用PHP，收一大堆GET var，請注意XD

// 開放自盡區、農村變廢墟！別讓賣台法案自盡區通過！
// 請追蹤沃草臉書：https://www.facebook.com/WatchOutTW

$sumcmd = $_GET["sumcmd"];
$x = $_GET["x"];
$y = $_GET["y"];
$z = $_GET["z"];
$sCount = $_GET["count"];
$sRange = $_GET["range"];
$sDelay = $_GET["delay"];
$mDelay = $_GET["mdelay"];
$MDelay = $_GET["Mdelay"];
$pRange = $_GET["prange"];
$nearEnts = $_GET["nearents"];
$tileEnt = $_GET["tileent"];

$cmdparts = explode(" ",$sumcmd);
$cmd = $cmdparts[0];
$entityId = $cmdparts[1];
$entityTag = $cmdparts[5];

if($cmd != "/summon" and $cmd != "summon"){
    trigger_error("WTFWTFWTFWTFWTFWTF",E_USER_ERROR);
}

$partTag = (isset($entityTag) ? ",SpawnData:" . $entityTag :"");
$partCount = (isset($sCount) ? ",SpawnCount:" . $sCount :"");
$partRange = (isset($sRange) ? ",SpawnRange:" . $sRange :"");
$partDelay = (isset($sDelay) ? ",Delay:" . $sDelay :"");
$partmDelay = (isset($mDelay) ? ",MinSpawnDelay:" . $mDelay :"");
$partMDelay = (isset($MDelay) ? ",MaxSpawnDelay:" . $Mdelay :"");
$partpRange = (isset($pRange) ? ",RequiredPlayerRange:" . $pRange :"");
$partnearEnts = (isset($nearEnts) ? ",MaxNearbyEntities:" . $nearEnts :"");
$parttileEnt = (isset($tileEnt) ? "," . $tileEnt :"");

$dataTag = "{EntityId:" . $entityId . $partTag . $partCount . $partRange . $partDelay . $partmDelay . $partMDelay . $partpRange . $partnearEnts . $parttileEnt . "}";

$setblockcmd = "/setblock" . " " . $x . " " . $y . " " . $z . " " . "minecraft:mob_spawner" . " " . "0" . " " . "keep" . " " . $dataTag;
echo $setblockcmd;
