<?php
$url1 = "https://rmcsport.bfmtv.com/rss/$choice1/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss1 = simplexml_load_file($url1);

$url2 = "https://rmcsport.bfmtv.com/rss/$choice2/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss2 = simplexml_load_file($url2);

$url3 = "https://rmcsport.bfmtv.com/rss/$choice3/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss3 = simplexml_load_file($url3); 

$urlHand = "https://rmcsport.bfmtv.com/rss/handball/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssHand = simplexml_load_file($urlHand);

$urlFoot = "https://rmcsport.bfmtv.com/rss/football/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssFoot = simplexml_load_file($urlFoot); 
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/home.php';
include __DIR__ . '/../views/templates/footer.php'; 