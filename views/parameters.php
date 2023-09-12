<form class="preferenceForm" action="" method="post">
    <!-- Sélection des flux de l'utilisateur -->
    <section class="fluxChoice container-fluid mt-5">
        <div class="row">
            <div class="choice">
                <h2 class="text-center mb-5">Modifier mes flux</h2>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="football">
                    <label class="form-check-label" for="football">
                        Football
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="rugby">
                    <label class="form-check-label" for="rugby">
                        Rugby
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="handball">
                    <label class="form-check-label" for="handball">
                        Handball
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="volleyball">
                    <label class="form-check-label" for="volleyball">
                        Volleyball
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="tennis">
                    <label class="form-check-label" for="tennis">
                        Tennis
                    </label>
                </div>
            </div>
        </div>
    </section>
    <!-- Modification du nombre d'article à afficher -->
    <section class="showArticles container-fluid">
        <div class="row align-items-baseline">
            <p class="col-7 col-md-2">Nombre d'articles affichés</p>
            <div class="numberOfArticles col-5 col-md-2">
                <select class="form-select" aria-label="Default select example">
                    <option value="">Sélectionnez un nombre</option>
                    <?php
                        foreach ($numberOfArticle as $key => $value) { ?>
                            <option><?= $value ?></option>
                        <?php
                        }
                        ?>
                </select>
            </div>
        </div>
    </section>
    <!-- Choix du mode de couleur du site -->
    <section class="choiceMode container-fluid">
        <div class="row">
            <div class="selectMode">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="darkMode">
                    <label class="form-check-label" for="darkMode">
                        Mode Sombre
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="lightMode">
                    <label class="form-check-label" for="lightMode">
                        Mode Clair
                    </label>
                </div>
            </div>
        </div>
    </section>
    <div class="submitBtn text-center">
        <button class="mt-5 col-4 col-md-1" type="submit">Valider</button>
    </div>
</form>