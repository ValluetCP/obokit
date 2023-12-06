<?php
include_once "../inc/header.php";
include_once "../inc/nav.php";
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

<script>

    function validerFormulaire() {


        // Vérifiez si aucune boisson n'est sélectionnée
        var boissonSelectionnee = document.getElementById("boisson").value;

        // Vérifiez si aucun fichier n'est sélectionné
        var fichierSelectionne = document.getElementById("formFile").files[0];


        if (boissonSelectionnee === "") {
                // Affichez une alerte si aucune sauce n'est sélectionnée
                alert("Veuillez sélectionner un boisson.");
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