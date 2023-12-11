<?php
include_once "../inc/header.php";
include_once "../inc/nav.php";
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

<script>

    document.addEventListener('DOMContentLoaded', function () {
        // Masquer les sections autres que "choix de boisson" au chargement initial
        document.getElementById('titre_image').style.display = 'none';
        document.getElementById('image_section').style.display = 'none';
        

    });


    function afficherMenu() {
        
        // Ajouter un dessert & image
        var titreImage = document.getElementById('titre_image');
        var imageSection = document.getElementById('image_section');
        var titreDessert = document.getElementById('titre_dessert');
        var dessertSelect = document.getElementById("dessert");
        // Ajouter nouveau dessert
        var newDessert = document.getElementById("new_dessert");
        var titreNewDessert = document.getElementById("titre_new_dessert");
        var addDessertInput = document.getElementById("add_dessert");


        // --- DESSERT - MASQUER --- //
        // Masquer la section d'images
        titreImage.style.display = 'none';
        imageSection.style.display = 'none';
        // Masquer - nouveau dessert
        newDessert.style.display = "none";
        titreNewDessert.style.display = "none";
        addDessertInput.style.display = "none";


        // Afficher - nouveau dessert
        if (dessertSelect.value === "0") {
            titreImage.style.display = 'block';
            imageSection.style.display = 'block';
            newDessert.style.display = "block";
            titreNewDessert.style.display = "block";
            addDessertInput.style.display = "block";
        }
        
        if (dessertSelect.value !== "") {
            titreImage.style.display = 'block';
            imageSection.style.display = 'block';
        }
        
    }


    function validerFormulaire() {

        // Vérifiez si aucun fichier n'est sélectionné
        var fichierSelectionne = document.getElementById("formFile").files[0];
        // Ajouter un dessert 
        var titreDessert = document.getElementById('titre_dessert');
        var dessertSelect = document.getElementById("dessert");
        // Ajouter nouveau dessert
        var newDessert = document.getElementById("new_dessert");
        var titreNewDessert = document.getElementById("titre_new_dessert");
        var addDessertInput = document.getElementById("add_dessert");


        if (dessertSelect.value === "") {
                // Affichez une alerte si aucune sauce n'est sélectionnée
                alert("Veuillez sélectionner un dessert.");
                return false; // Empêche l'envoi du formulaire
        }

        if (dessertSelect.value === "0" && addDessertInput.value.trim() === "") {
                // Affichez une alerte si aucune sauce n'est sélectionnée
                alert("Veuillez inscrir un nouveau dessert.");
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