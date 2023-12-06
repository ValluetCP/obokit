<?php
include_once "../inc/header.php";
include_once "../inc/nav.php";
?>

<div class="container">
    <h1>Ajouter une sauce</h1>
    <form method="post" action="../traitement/action.php" onsubmit="return validerFormulaire()" enctype="multipart/form-data">

        <h4 class="mt-5">Images</h4>
        <div class="mb-3">
            <label for="formFile" class="form-label">Format image 363px x 247px</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <h4 class="mt-5">Sauces</h4>
        <select name="sauce_indiv" id="sauce_indiv" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="sauce_chien">Sauce chien</option>
            <option value="sauce_creoline">Sauce créoline</option>
            <option value="sauce_poivre">Sauce poivre</option>
            <option value="sauce_cocktail">Sauce cocktail</option>
            <option value="moutarde">Moutarde</option>
            <option value="sauce_tomate_maison">Sauce tomate maison</option>
        </select>

        <input type="submit" value="Ajouter une sauce" class="my-5" name="ajouter_sauce">
    </form>
</div>

<script>

    function validerFormulaire() {

        // Vérifiez si aucune sauce n'est sélectionnée
        var sauceSelectionnee = document.getElementById("sauce_indiv").value;

        // Vérifiez si aucun fichier n'est sélectionné
        var fichierSelectionne = document.getElementById("formFile").files[0];


        if (sauceSelectionnee === "") {
                // Affichez une alerte si aucune sauce n'est sélectionnée
                alert("Veuillez sélectionner une sauce.");
                return false; // Empêche l'envoi du formulaire
        }

        if (!fichierSelectionne) {
            // Affichez une alerte si aucun fichier n'est sélectionné
            alert("Veuillez sélectionner un fichier.");
            return false; // Empêche l'envoi du formulaire
        }

    return true; // Permet la soumission du formulaire
    }
</script>
<?php
include_once "../inc/footer.php";
?>