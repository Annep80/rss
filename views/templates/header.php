<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopte mon RSS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md sticky-top" id="firstNav">
        <div class="container p-0">
            <a class="navbar-logo" href="/index.php"><img src="/public/assets/img/adopteunrss.png" alt="adopte un rss"></a>
            <button class="menu-hamburger navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link ms-4" href="/controllers/association-ctrl.php">Choix 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-4" href="/controllers/evenement-ctrl.php">Choix 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-4" href="/controllers/connexion-ctrl.php">Choix 3</a>
                    </li>
                </ul>
                <a href="/controllers/parameters-ctrl.php" class="nav-link ms-4">Modifier mes flux</a>
                <a href="/controllers/refer-ctrl.php" class="nav-link ms-4">test 404</a>
            </div>
        </div>
    </nav>