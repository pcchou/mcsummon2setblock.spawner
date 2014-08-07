<?php
// 轉換用PHP，收一大堆GET var，請注意XD

// 開放自盡區、農村變廢墟！別讓賣台法案自盡區通過！
// 請追蹤沃草臉書：https://www.facebook.com/WatchOutTW

// 珍惜生命，遠離IE, Windows.

$sumcmd = $_GET["sumcmd"];
$x = (isset($_GET["x"]) and $_GET["x"] != "" ? $_GET["x"] : "~");
$y = (isset($_GET["y"]) and $_GET["y"] != ""  ? $_GET["y"] : "~");
$z = (isset($_GET["z"]) and $_GET["z"] != ""  ? $_GET["z"] : "~");
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

$partTag = (((isset($entityTag) and $entityTag != "") )? ",SpawnData:" . $entityTag :"");
$partCount = ((isset($sCount) and $sCount != "") ? ",SpawnCount:" . $sCount :"");
$partRange = ((isset($sRange) and $sRange != "") ? ",SpawnRange:" . $sRange :"");
$partDelay = ((isset($sDelay) and $sDelay != "") ? ",Delay:" . $sDelay :"");
$partmDelay = ((isset($mDelay) and $mDelay != "") ? ",MinSpawnDelay:" . $mDelay :"");
$partMDelay = ((isset($MDelay) and $MDelay != "") ? ",MaxSpawnDelay:" . $Mdelay :"");
$partpRange = ((isset($pRange) and $pRange != "") ? ",RequiredPlayerRange:" . $pRange :"");
$partnearEnts = ((isset($nearEnts) and $nearEnts != "") ? ",MaxNearbyEntities:" . $nearEnts :"");
$parttileEnt = ((isset($tileEnt) and $tileEnt != "") ? "," . $tileEnt :"");

$dataTag = "{EntityId:" . $entityId . $partTag . $partCount . $partRange . $partDelay . $partmDelay . $partMDelay . $partpRange . $partnearEnts . $parttileEnt . "}";

$setblockcmd = "/setblock" . " " . $x . " " . $y . " " . $z . " " . "minecraft:mob_spawner" . " " . "0" . " " . "replace" . " " . $dataTag;
echo $setblockcmd;
