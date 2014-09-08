<?php

require_once '../vendor/autoload.php';

$animeMap = new \AnimeMap\Client();
$animes = $animeMap->searchByArea('saitama');
foreach ($animes as $anime) {
    echo $anime->title . "\n";
}
