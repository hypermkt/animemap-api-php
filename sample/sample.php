<?php

require_once '../vendor/autoload.php';

$animeMap = new \AnimeMap\Api();
$animes = $animeMap->get();
foreach ($animes as $anime) {
    echo $anime->title . "\n";
}
