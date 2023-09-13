<?php
$choiceArray= json_decode($_COOKIE['sportChoosen']);

$choice1 = $choiceArray[0];
$choice2 = $choiceArray[1];
$choice3 = $choiceArray[2];
// la valeur de la checkbox détermine l'url
$url1 = "https://rmcsport.bfmtv.com/rss/$choice1/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss1 = simplexml_load_file($url1);

$url2 = "https://rmcsport.bfmtv.com/rss/$choice2/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss2 = simplexml_load_file($url2);

$url3 = "https://rmcsport.bfmtv.com/rss/$choice3/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss3 = simplexml_load_file($url3); 

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/home.php';
include __DIR__ . '/../views/templates/footer.php'; 