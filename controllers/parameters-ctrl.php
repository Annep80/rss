<?php 
// ========== Variables ========== //
define('SPORTS', ['football', 'rugby', 'handball', 'volleyball', 'tennis']);
define('NUMBER_OF_ARTICLE', [6, 9, 12]);

// ========== Cookies ========== //
if(isset($_POST['sportChoice'])) {
    $sportChoice = $_POST['sportChoice'];
    setcookie('sportChoosen', json_encode($_POST['sportChoice']), time()+3600*24, '/');
} else {
    echo ' ';
}

if(isset($_POST['numberOfArticle'])) {
    $numberOfArticle = $_POST['numberOfArticle'];
    setcookie('numberOfArticle', $numberOfArticle, time()+3600*24, '/');
} else {
    echo ' ';
}
// ========== Nettoyage Choix des Sports ========== //
$sportChoice = filter_input(INPUT_POST, 'sportChoice', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY) ?? [];



// ========== Nettoyage Nombre d'Articles ========== //
$numberOfArticle = filter_input(INPUT_POST, 'numberOfArticle', FILTER_SANITIZE_NUMBER_INT);
if (!empty($numberOfArticle)) {
    if (!in_array($numberOfArticle, NUMBER_OF_ARTICLE)) {
        $error["numberOfArticle"] = "Le nombre entré n'est pas valide";
    }
}
// ========== Lien des fichiers ========== //
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/parameters.php';
include __DIR__ . '/../views/templates/footer.php';