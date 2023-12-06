<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container">
    <h1>Ajouter un dessert</h1>
    <form method="post" action="../traitement/action.php" onsubmit="return validerFormulaire()" enctype="multipart/form-data">

        <h4 class="mt-5">Images</h4>
        <div class="mb-3">
            <label for="formFile" class="form-label">Format image 363px x 247px</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <h4 class="mt-5">Dessert</h4>
        <select name="dessert" id="dessert" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="smoothie">Smoothie baobab</option>
            <option value="lassi">Lassi mangue</option>
            <option value="degue">Dègué "thiakry"</option>
            <option value="mont-blanc">Mont blanc</option>
            <option value="sorbet_coco">Sorbet coco</option>
            <option value="sorbet_passion">Sorbet fruit de la passion</option>
        </select>


        <input type="submit" value="Ajouter un dessert" class="my-5" name="ajouter_dessert">
    </form>
</div>

<script src="./asset/js/deroulant_dessert.js"></script>

<?php
include_once "./inc/footer.php";
?>