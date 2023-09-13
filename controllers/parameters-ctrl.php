<?php 
// ========== Variables ========== //
$numberOfArticle = ['6', '9', '12'];
define('SPORTS', ['Football', 'Rugby', 'Handball', 'Volleyball', 'Tennis']);

// ========== Cookies ========== //
if(isset($_POST['sportChoice'])) {
    $sportChoice = $_POST['sportChoice'];
    setcookie('sportChoosen', json_encode($_POST['sportChoice']), time()+3600*24, '/');
} else {
    echo ' ';
}
// ========== Nettoyage Choix des Sports ========== //
$sportChoice = filter_input(INPUT_POST, 'sportChoice', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY) ?? [];



// ========== Lien des fichiers ========== //
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/parameters.php';
include __DIR__ . '/../views/templates/footer.php';