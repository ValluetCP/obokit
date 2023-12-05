<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container">
    <h1 class="m-5">Ajouter une petite faim</h1>
    <form method="post" action="" onsubmit="return validerFormulaire()">
        <h4 class="mt-5">Catégorie</h4>
        <select name="petite_faim" id="petite_faim" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="aperitif">Apéritif</option>
            <option value="accompagnement">Accompagnement</option>
        </select>

        <div id="menuAperitif" style="display:none;">
            <h4 class="mt-5">Apéritif</h4>
            <selec class="form-select" name="aperitif" id="aperitif">
                <option value="pastel">Pastel</option>
                <option value="accras">Accras</option>
            </selec>
        </div>

        <div id="menuAccompagnement" style="display:none;">
            <h4 class="mt-5">Accompagnement</h4>
            <select class="form-select" name="accompagnement" id="accompagnement">
                <option value="frite">Frite</option>
                <option value="alloco">Alloco</option>
            </select>
        </div>

        <div id="friteAccompagnement" style="display:none;">
            <h4 class="mt-5">Frite</h4>
            <select class="form-select" name="frite" id="frite">
                <option value="pomme_de_terre">Pomme de terre</option>
                <option value="patate_douce">Patate douce</option>
            </select>
        </div>

        <div id="pastelAperitif" style="display:none;">
            <h4 class="mt-5">Pastel</h4>
            <select class="form-select" name="pastel" id="pastel">
                <option value="pastel_poulet">poulet</option>
                <option value="pastel_boeuf">Boeuf fromage</option>
                <option value="pastel_crevette">Crevette</option>
                <option value="pastel_saumon">Saumon</option>
            </select>
        </div>

        <input type="submit" value="Valider" class="mt-5">
    </form>
</div>

<script src="./asset/js/deroulant_petite_faim.js"></script>

<?php
include_once "./inc/footer.php";
?>