<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container">

        
    <h1 class="m-5  text-center">Ajouter une petite faim</h1>
    
    <form method="post" action="./traitement/action.php" onsubmit="return validerFormulaire()"  enctype="multipart/form-data">

        <h4 class="mt-5">Images</h4>
        <div class="mb-3">
            <label for="formFile" class="form-label">Format image 363px x 247px</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <h4 class="mt-5">Petits plaisirs & Accompagnements</h4>
        <select name="petite_faim" id="petite_faim" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="aperitif">Petits plaisirs</option>
            <option value="accompagnement">Accompagnement</option>
        </select>

        <div id="menuAperitif" style="display:none;">
            <h4 class="mt-5">Petits plaisirs</h4>
            <select class="form-select" name="aperitif" id="aperitif" onchange="afficherSousMenu()">
                <option value="">Sélectionnez...</option>
                <option value="pastel">Pastel</option>
                <option value="accras">Accras de morue</option>
            </select>

            <div id="pastelAperitif" style="display:none;">
                <h4 class="mt-5">Pastel</h4>
                <select class="form-select" name="pastel" id="pastel">
                    <option value="">Sélectionnez...</option>
                    <option value="pastel_poulet">Poulet au curry</option>
                    <option value="pastel_boeuf">Boeuf fromage</option>
                    <option value="pastel_crevette">Crevette</option>
                    <option value="pastel_saumon">Saumon fumée</option>
                </select>
            </div>
        </div>

        <div id="menuAccompagnement" style="display:none;">
            <h4 class="mt-5">Accompagnement</h4>
            <select class="form-select" name="accompagnement" id="accompagnement" onchange="afficherSousMenu()">
                <option value="">Sélectionnez...</option>
                <option value="frite">Frite</option>
                <option value="alloco">Alloco</option>
            </select>

            <div id="friteAccompagnement" style="display:none;">
                <h4 class="mt-5">Frite</h4>
                <select class="form-select" name="frite" id="frite">
                    <option value="">Sélectionnez...</option>
                    <option value="pomme_de_terre">Pomme de terre</option>
                    <option value="patate_douce">Patate douce</option>
                </select>
            </div>
        </div>

        <div id="sauce" style="display:none;">
            <h4 class="mt-5">Sauce</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="sauce_choix" checked>
                <label class="form-check-label" for="sauce_choix">
                    Sauce au choix
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="sauce_tomate">
                <label class="form-check-label" for="sauce_tomate">
                    Sauce tomate maison
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="sauce_creoline">
                <label class="form-check-label" for="sauce_creoline">
                    Sauce créoline
                </label>
            </div>
        </div>

        <h4 class="mt-5" id="ingredientTitre" style="display:none;">Ingrédients</h4>
        <div class="form-floating mt-2" id="commentaireSection" style="display:none;">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="commentaire"></textarea>
            <label for="floatingTextarea">Inscrire la liste des ingrédients</label>
        </div>

        <input type="submit" value="Valider" class="my-5">
    </form>

    <div id="erreur" style="display:none; color: red;" class="mt-5">
        Veuillez sélectionner une option dans chaque menu.
    </div>
</div>

<script src="./asset/js/deroulant_petite_faim.js"></script>

<?php
include_once "./inc/footer.php";
?>
