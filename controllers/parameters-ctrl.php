<?php 
// ========== Variables ========== //
$errors = array();

// ========== Constantes ========== //
define('SPORTS', ['football', 'rugby', 'handball', 'volley', 'tennis']);
define('NUMBER_OF_ARTICLE', [6, 9, 12]);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // ========== Cookies ========== //
if(isset($_POST['numberOfArticle'])) {
    $numberOfArticle = $_POST['numberOfArticle'];
    setcookie('numberOfArticle', $numberOfArticle, time()+3600*24, '/');
} else {
    echo ' ';
}
// ========== Nettoyage Choix des Sports ========== //
$sportChoice = filter_input(INPUT_POST, 'sportChoice', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY) ?? [];
    foreach ($sportChoice as $key => $value) {
        if (array_key_exists($key, SPORTS) == false) {
            $errors['sportChoice'] = 'Veuillez définir correctement les sports que vous avez choisi.';
        }
    }


    if (isset($_POST['sportChoice']) && count($_POST['sportChoice']) < 3) {
        $errors['sportChoice'] = '* Vous devez choisir au moins 3 sports.';
    } else {
        if(isset($_POST['sportChoice'])) {
            $sportChoice = $_POST['sportChoice'];
            setcookie('sportChoosen', json_encode($_POST['sportChoice']), time()+3600*24, '/');
            header('location: /controllers/home-ctrl.php');
        }
    }

// ========== Nettoyage Nombre d'Articles ========== //
$numberOfArticle = filter_input(INPUT_POST, 'numberOfArticle', FILTER_SANITIZE_NUMBER_INT);
if (!empty($numberOfArticle)) {
    if (!in_array($numberOfArticle, NUMBER_OF_ARTICLE)) {
        $errors["numberOfArticle"] = "Le nombre entré n'est pas valide";
    }
}
}

// ========= Light Mode ======= //
// if (isset($_POST['lightMode']) && $_POST['lightMode'] === true) {
//     setcookie('theme', 'light', time() + 365 * 24 * 3600, '/');
// } else {
//     setcookie('theme', 'dark', time() - 3600, '/');
// }

// ========== Lien des fichiers ========== //
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/parameters.php';
include __DIR__ . '/../views/templates/footer.php';