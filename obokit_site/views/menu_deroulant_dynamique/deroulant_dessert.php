<?php
include_once "../inc/header.php";
include_once "../inc/nav.php";
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

<script>

    function validerFormulaire() {


        // Vérifiez si aucune dessert n'est sélectionnée
        var dessertSelectionnee = document.getElementById("dessert").value;

        // Vérifiez si aucun fichier n'est sélectionné
        var fichierSelectionne = document.getElementById("formFile").files[0];


        if (dessertSelectionnee === "") {
                // Affichez une alerte si aucune sauce n'est sélectionnée
                alert("Veuillez sélectionner un dessert.");
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