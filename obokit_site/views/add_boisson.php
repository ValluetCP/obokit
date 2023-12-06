<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container">
    <h1>Ajouter un boisson</h1>
    <form method="post" action="../traitement/action.php" onsubmit="return validerFormulaire()" enctype="multipart/form-data">

        <h4 class="mt-5">Images</h4>
        <div class="mb-3">
            <label for="formFile" class="form-label">Format image 363px x 247px</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <h4 class="mt-5">Boisson</h4>
        <select name="boisson" id="boisson" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="smoothie">Gingembre O'Bokit</option>
            <option value="lassi">Bissap O'Bokit</option>
        </select>


        <input type="submit" value="Ajouter un boisson" class="my-5" name="ajouter_boisson">
    </form>
</div>

<script src="./asset/js/deroulant_boisson.js"></script>

<?php
include_once "./inc/footer.php";
?>