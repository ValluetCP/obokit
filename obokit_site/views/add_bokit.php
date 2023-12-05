<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container">
    <h1 class="m-5 text-center">Ajouter un bokit</h1>
    <form action="./traitement/action.php" method="post">

        <h2 class="mb-4 mt-5">Bokit</h2>
        <h4 class="mt-5">Protéines</h4>
        <label class="m-2">ex : poulet, morue,...</label>
        <select name="categorie" id="categorie" class="form-select" aria-label="Default select example">
            <!-- <option selected>Open this select menu</option> -->
            <option selected value="1">poulet</option>
            <option value="2">saumon</option>
            <option value="3">morue</option>
            <option value="4">légume</option>
            <option value="5">boeuf bacon oeuf</option>
            <!-- <option value="6"></option> -->
        </select>

        <h4 class="mt-5">Préparation</h4>
        <ul class="list-group">
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="boucane" name="boucane">
                <label class="form-check-label" for="boucane">boucané</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="boucane_banane_plantain" name="boucane_banane_plantain">
                <label class="form-check-label" for="boucane_banane_plantain">boucané banane plantain</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="yassa" name="yassa">
                <label class="form-check-label" for="yassa">yassa</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="marinade_maison" name="marinade_maison">
                <label class="form-check-label" for="marinade_maison">marinade maison</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="fumee" name="fumee">
                <label class="form-check-label" for="fumee">fumée</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="chiquetaille" name="chiquetaille">
                <label class="form-check-label" for="chiquetaille">chiquetaille</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="vegetarien" name="vegetarien">
                <label class="form-check-label" for="vegetarien">végétarien</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="complet" name="complet">
                <label class="form-check-label" for="complet">complet</label>
            </li>
        </ul>

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





 
        <button type="submit" class="btn btn-primary mt-5 mb-5" name="ajouter" value="">Ajouter</button>
    </form>
</div>

<?php
include_once "./inc/footer.php";
?>