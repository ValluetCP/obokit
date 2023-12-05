<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container">
    <h1 class="m-5">Ajouter une petite faim</h1>
    <form method="post" action="" onsubmit="return validerFormulaire()">
        <h4 class="mt-5">Catégorie</h4>
        <select name="categorie" id="categorie" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="aperitif">Apéritif</option>
            <option value="accompagnement">Accompagnement</option>
        </select>

        <div id="menuPoulet" style="display:none;">
            <h4 class="mt-5">Préparation</h4>
            <select class="form-select" name="poulet" id="poulet">
                <option value="">Sélectionnez...</option>
                <option value="boucane">Boucané</option>
                <option value="yassa">Yassa</option>
                <option value="boucaneBananePlantain">Boucané banane plantain</option>
                <option value="marinadeMaison">Marinade maison</option>
            </select>
        </div>

        <div id="menuSaumon" style="display:none;">
            <h4 class="mt-5">Préparation</h4>
            <selec class="form-select"t name="plat2" id="plat2">
                <option value="fumee">Fumée</option>
            </selec>
        </div>

        <div id="menuMorue" style="display:none;">
            <h4 class="mt-5">Préparation</h4>
            <select class="form-select" name="plat3" id="plat3">
                <option value="chiquetaille">Chiquetaille</option>
            </select>
        </div>

        <div id="menuLegume" style="display:none;">
            <h4 class="mt-5">Préparation</h4>
            <select class="form-select" name="plat4" id="plat4">
                <option value="vegetarien">Végétarien</option>
            </select>
        </div>

        <div id="menuBoeuf" style="display:none;">
            <h4 class="mt-5">Préparation</h4>
            <select class="form-select" name="plat5" id="plat5">
                <option value="complet">Complet</option>
            </select>
        </div>

        <input type="submit" value="Valider" class="mt-5">
    </form>
</div>

<?php
include_once "./inc/footer.php";
?>