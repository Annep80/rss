<?php 
if (empty($_COOKIE['sportChoosen'])) {
    header('location: /controllers/parameters-ctrl.php');
die;
}
    $choice = $_GET['choice'];

    $url = "https://rmcsport.bfmtv.com/rss/$choice/"; /* insérer ici l'adresse du flux RSS de votre choix */
    $rss = simplexml_load_file($url);
    

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/pages.php';
include __DIR__ . '/../views/templates/footer.php';