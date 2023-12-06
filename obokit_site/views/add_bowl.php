<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container">
    <h1>Ajouter un bowl</h1>
    <form method="post" action="../traitement/action.php" onsubmit="return validerFormulaire()" enctype="multipart/form-data">

        <h4 class="mt-5">Images</h4>
        <div class="mb-3">
            <label for="formFile" class="form-label">Format image 363px x 247px</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <h4 class="mt-5">Protéines</h4>
        <select name="viande" id="viande" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="morue">Morue</option>
            <option value="poulet">Poulet yassa</option>
            <option value="vegetarien">végétarien</option>
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

        <h2 class="mb-4 mt-5">Ingrédients</h2>

        <h4>Sauces</h4>
        <ul class="list-group">
            <li class="list-group-item">
                <input class="form-check-input me-1 sauce" type="checkbox" value="" id="sauce_chien" name="sauce_chien">
                <label class="form-check-label" for="sauce_chien">sauce chien</label>
            </li>
        </ul>

        <h4 class="mt-5">Légumes & crudités</h4>
        <ul class="list-group">
            <li class="list-group-item">
                <input class="form-check-input me-1 legumes" type="checkbox" value="" id="banane" name="banane">
                <label class="form-check-label" for="banane">banane plantain</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 legumes" type="checkbox" value="" id="tomate" name="tomate">
                <label class="form-check-label" for="tomate">tomate</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 legumes" type="checkbox" value="" id="oignon_rouge" name="oignon_rouge">
                <label class="form-check-label" for="oignon_rouge">oignon rouge</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 legumes" type="checkbox" value="" id="carotte_choux" name="carotte_choux">
                <label class="form-check-label" for="carotte_choux"> juliennes de carottes et choux</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 legumes" type="checkbox" value="" id="avocat" name="avocat">
                <label class="form-check-label" for="avocat">avocat</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 legumes" type="checkbox" value="" id="legume_marine" name="legume_marine">
                <label class="form-check-label" for="legume_marine">mélanges de légumes mariné</label>
            </li>
        </ul>

        <input type="submit" value="Ajouter" class="my-5" name="ajouter_bokit">
    </form>
</div>

<script src="./asset/js/deroulant_bokit.js"></script>
<?php
include_once "./inc/footer.php";
?>