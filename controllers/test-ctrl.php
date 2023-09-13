<?php
$url = "https://rmcsport.bfmtv.com/rss/football/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($url);

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/test.php';
include __DIR__ . '/../views/templates/footer.php';