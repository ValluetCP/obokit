<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container">
    <h1>Ajouter un dessert</h1>
    <form method="post" action="../traitement/action.php" onsubmit="return validerFormulaire()" enctype="multipart/form-data">


        <!-- DESSERT - Choisir, Sélectionner (input caché) -->
        <h4 class="mt-5" id="titre_dessert">Dessert</h4>
        <select name="dessert" id="dessert" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="0">Aucun - Ajouter un nouveau dessert</option>
            <option value="smoothie">Smoothie baobab</option>
            <option value="lassi">Lassi mangue</option>
            <option value="degue">Dègué "thiakry"</option>
            <option value="mont-blanc">Mont blanc</option>
            <option value="sorbet_coco">Sorbet coco</option>
            <option value="sorbet_passion">Sorbet fruit de la passion</option>
        </select>

        <!-- DESSERT - Ajouter un nouveau (input caché) -->
        <div id="new_dessert" class="mt-3" style="display:none;">
            <h4 class="mt-5" id="titre_new_dessert">Ajouter un nouveau dessert</h4>
            <div>
                <input class="form-control" type="text" placeholder="Inscrivez le nom du dessert" id="add_dessert" name="add_dessert">
            </div>
        </div>

        <!-- IMAGE - uniquement réservée aux BOISSONS ARTISANALES -->
        <h4 class="mt-5" id="titre_image">Image</h4>
        <div class="mb-3" id="image_section">
            <label for="formFile" class="form-label">Format image 363px x 247px</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <input type="submit" value="Ajouter un dessert" class="my-5" name="ajouter_dessert">
    </form>
</div>

<script src="./asset/js/deroulant_dessert.js"></script>

<?php
include_once "./inc/footer.php";
?>