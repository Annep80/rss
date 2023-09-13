<?php 
$urlVolley = "https://rmcsport.bfmtv.com/rss/volley/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssVolley = simplexml_load_file($urlVolley);

$urlRugby = "https://rmcsport.bfmtv.com/rss/rugby/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssRugby = simplexml_load_file($urlRugby);

$urlTennis = "https://rmcsport.bfmtv.com/rss/tennis/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssTennis = simplexml_load_file($urlTennis); 

$urlHand = "https://rmcsport.bfmtv.com/rss/handball/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssHand = simplexml_load_file($urlHand);

$urlFoot = "https://rmcsport.bfmtv.com/rss/football/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssFoot = simplexml_load_file($urlFoot); 
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/pages.php';
include __DIR__ . '/../views/templates/footer.php';