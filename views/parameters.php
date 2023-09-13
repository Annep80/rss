<form class="preferenceForm" id="preferenceForm" action="" method="post">
    <!-- Sélection des flux de l'utilisateur -->
    <section class="fluxChoice container-fluid mt-3">
        <div class="row">
            <div class="choice">
                <h2 class="text-center mb-3">Modifier mes flux</h2>
                <?php
                foreach (SPORTS as $key => $value) {
                ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="sportChoice[]" id="<?= $key ?>" value="<?= $value ?>" <?= (isset($sportChoice) && in_array($key, $sportChoice)) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="language<?= $key ?>">
                            <?= $value ?>
                        </label>
                    </div>
                <?php
                }
                ?>
                <small class="form-text error"><?= $error['sportChoice'] ?? '' ?></small>
            </div>
        </div>
    </section>
    <!-- Modification du nombre d'article à afficher -->
    <section class="showArticles container-fluid">
        <div class="row align-items-baseline">
            <p class="col-7 col-md-2">Nombre d'articles affichés</p>
            <div class="numberOfArticles col-5 col-md-3">
                <select class="form-select" aria-label="Default select example" required>
                    <option value="" selected disabled>Sélectionnez un nombre</option>
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
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Mode Sombre</label>
                </div>
            </div>
        </div>
    </section>
    <div class="submitBtn text-center">
        <button id="btnSubmit" class="mt-3 col-4 col-md-1" type="submit">Valider</button>
    </div>
</form>