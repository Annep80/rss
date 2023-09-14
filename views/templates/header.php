<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $choiceArray= json_decode($_COOKIE['sportChoosen']);
    $displayChoice = json_decode($_COOKIE['numberOfArticle']);
    $choice1 = $choiceArray[0];
    $choice2 = $choiceArray[1];
    $choice3 = $choiceArray[2];
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopte un RSS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md sticky-top" id="firstNav">
        <div class="container p-0">
            <a class="navbar-logo" href="/index.php"><img class="img-logo"src="/public/assets/img/adopteunrss.png" alt="adopte un rss"></a>
            <button class="menu-hamburger navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <?php if ($_SERVER['REQUEST_METHOD'] == "POST"){?>
                <ul class="navbar-nav mt-2">
                    <li class="nav-item">
                        <a class="nav-link ms-4" href="/controllers/pages-ctrl.php?choice=<?=$choice1?>"><?=$choice1?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-4" href="/controllers/pages-ctrl.php?choice=<?=$choice2?>"><?=$choice2?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-4" href="/controllers/pages-ctrl.php?choice=<?=$choice3?>"><?=$choice3?></a>
                    </li>
                </ul>
                <?php } ?>
                <a href="/controllers/parameters-ctrl.php" class="nav-link mt-2 ms-4">Modifier mes flux</a>
                <a href="/controllers/refer-ctrl.php" class="nav-link mt-2 ms-4" >test 404</a>
            </div>
        </div>
    </nav>