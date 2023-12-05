<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container">
    <h1 class="m-5 text-center">Ajouter un bokit</h1>
    <form action="./traitement/action.php" method="post" onsubmit="return validerFormulaire()">

        <h2 class="mb-4 mt-5">Bokit</h2>
        <h4 class="mt-5">Protéines</h4>
        <select name="viande" id="viande" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="poulet">Poulet</option>
            <option value="saumon">Saumon</option>
            <option value="morue">Morue</option>
            <option value="legume">Légume</option>
            <option value="boeuf">Steack bacon de boeuf</option>
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

        <h4 class="mt-5">images</h4>
        <div class="mb-3">
            <label for="formFile" class="form-label">Format image 363px x 247px</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <h2 class="mb-4 mt-5">Ingrédients</h2>

        <h4>Sauces</h4>
        <ul class="list-group">
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="sauce_chien" name="sauce_chien">
                <label class="form-check-label" for="sauce_chien">sauce chien</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="sauce_blanche" name="sauce_blanche">
                <label class="form-check-label" for="sauce_blanche">sauce blanche</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="sauce_cocktail" name="sauce_cocktail">
                <label class="form-check-label" for="sauce_cocktail">sauce cocktail</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="sauce_poivre" name="sauce_poivre">
                <label class="form-check-label" for="sauce_poivre">sauce poivre</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="moutarde" name="moutarde">
                <label class="form-check-label" for="moutarde">moutarde</label>
            </li>
        </ul>
        <h4 class="mt-5">Légumes & crudités</h4>
        <ul class="list-group">
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="salade" name="salade">
                <label class="form-check-label" for="salade">salade</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="tomate" name="tomate">
                <label class="form-check-label" for="tomate">tomate</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="oignon_rouge" name="oignon_rouge">
                <label class="form-check-label" for="oignon_rouge">oignon rouge</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="carotte" name="carotte">
                <label class="form-check-label" for="carotte">carotte</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="citron" name="citron">
                <label class="form-check-label" for="citron">citron</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="olive" name="olive">
                <label class="form-check-label" for="olive">olive</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="champignon" name="champignon">
                <label class="form-check-label" for="champignon">champignon</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="avocat" name="avocat">
                <label class="form-check-label" for="avocat">avocat</label>
            </li>
        </ul>
        <h4 class="mt-5">Fromage</h4>
        <ul class="list-group">
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="cheddar" name="cheddar">
                <label class="form-check-label" for="cheddar">cheddar</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="parmesan" name="parmesan">
                <label class="form-check-label" for="parmesan">parmesan</label>
            </li>
        </ul>


        <button type="submit" class="btn btn-primary mt-5 mb-5" name="ajouter" value="ajouter">Ajouter</button>

    </form>
</div>

<script src="./asset/js/menu_deroulant_dynamique.js"></script>
<?php
include_once "./inc/footer.php";
?>