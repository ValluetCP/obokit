<?php
include_once "../inc/header.php";
include_once "../inc/nav.php";
?>

<div class="container">
    <h1>Ajouter une sauce</h1>
    <form method="post" action="../traitement/action.php" onsubmit="return validerFormulaire()" enctype="multipart/form-data">

    
        <!-- CHOIX DE SAUCE -->
        <h4 class="mt-5 mb-3">Veuillez choisir le type de sauce à ajouter</h4>
        <div id="sauce_choix">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="bokit_sauce">
                <label class="form-check-label" for="bokit_sauce">
                Sauce bokit
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="maison_sauce">
                <label class="form-check-label" for="maison_sauce">
                Sauce maison (petite faim & format individuel)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="autre_sauce">
                <label class="form-check-label" for="autre_sauce">
                Autre sauce
                </label>
            </div>
        </div>

        
        <!-- IMAGE - uniquement réservée aux 'SAUCES MAISONS' & 'AUTRES SAUCES' -->
        <h4 class="mt-5" id="titre_image">Images</h4>
        <div class="mb-3" id="image_section">
            <label for="formFile" class="form-label">Format image 363px x 247px</label>
            <input class="form-control" type="file" id="formFile">
        </div>


        
        <!-- 'SAUCES BOKIT' - Choisir, Sélectionner (input caché) -->
        <h4 class="mt-5" id="titre_sauce_bokit">Sauces Bokit</h4>
        <select name="sauce_bokit" id="sauce_bokit" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="0">Aucune - Ajouter une nouvelle sauce pour bokit</option>
            <option value="sauce_chien">Sauce chien</option>
            <option value="sauce_blanche">Sauce blanche</option>
            <option value="sauce_poivre">Sauce poivre</option>
            <option value="sauce_cocktail">Sauce cocktail</option>
            <option value="sauce_thai">Sauce thai</option>
            <option value="sauce_massala">Sauce massala</option>
        </select>

        
        <!-- 'SAUCES BOKIT' - Ajouter une nouvelle (input caché) -->
        <div id="new_sauce_bokit" class="mt-3" style="display:none;">
            <h4 class="mt-5" id="titre_new_sauce_bokit">Ajouter une nouvelle sauce bokit</h4>
            <div>
                <input class="form-control" type="text" placeholder="Inscrivez le nom de la sauce" id="add_sauce_bokit" name="add_sauce_bokit">
            </div>
        </div>

        
        <!-- 'SAUCES MAISON' - Choisir, Sélectionner (input caché) -->
        <h4 class="mt-5" id="titre_sauce_maison">Sauces faite maison</h4>
        <select name="sauce_maison" id="sauce_maison" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="0">Aucune - Ajouter une nouvelle sauce faite maison</option>
            <option value="sauce_creoline">Sauce créoline</option>
            <option value="sauce_tomate_maison">Sauce tomate maison</option>
        </select>
                
        <!-- 'SAUCES MAISON' - Ajouter une nouvelle (input caché) -->
        <div id="new_sauce_maison" class="mt-3" style="display:none;">
            <h4 class="mt-5" id="titre_new_sauce_maison">Ajouter une nouvelle sauce maison</h4>
            <div>
                <input class="form-control" type="text" placeholder="Inscrivez le nom de la sauce" id="add_sauce_maison" name="add_sauce_maison">
            </div>
        </div>


        <!-- 'AUTRES SAUCES' - Choisir, Sélectionner (input caché) -->
        <h4 class="mt-5" id="titre_sauce_autre">Autre sauces</h4>
        <select name="sauce_autre" id="sauce_autre" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="0">Aucune - Ajouter une nouvelle autre sauce</option>
            <option value="moutarde">Moutarde</option>
            <option value="ketchup">Ketchup</option>
            <option value="mayonnaise">Mayonnaise</option>
            <option value="barbecue">Barbecue</option>
        </select>
                        
        <!-- 'AUTRES SAUCES' - Ajouter une nouvelle (input caché) -->
        <div id="new_sauce_autre" class="mt-3" style="display:none;">
            <h4 class="mt-5" id="titre_new_sauce_autre">Ajouter une nouvelle sauce autre</h4>
            <div>
                <input class="form-control" type="text" placeholder="Inscrivez le nom de la sauce" id="add_sauce_autre" name="add_sauce_autre">
            </div>
        </div>

        <input type="submit" value="Ajouter une sauce" class="my-5" name="ajouter_sauce">
    </form>
</div>

<script>

    
    // Au chargement de la page, faire apparaître uniquement le menu radio "choix des sauces"
    document.addEventListener('DOMContentLoaded', function () {
        // Masquer les sections autres que "choix de sauce" au chargement initial
        document.getElementById('titre_image').style.display = 'none';
        document.getElementById('image_section').style.display = 'none';
        document.getElementById('image_section').style.display = 'none';
        document.getElementById('titre_sauce_bokit').style.display = 'none';
        document.getElementById('sauce_bokit').style.display = 'none';
        document.getElementById('new_sauce_bokit').style.display = 'none';
        document.getElementById('titre_sauce_maison').style.display = 'none';
        document.getElementById('sauce_maison').style.display = 'none';
        document.getElementById('new_sauce_maison').style.display = 'none';
        document.getElementById('titre_sauce_autre').style.display = 'none';
        document.getElementById('sauce_autre').style.display = 'none';
        document.getElementById('new_sauce_autre').style.display = 'none';

    });

    function afficherMenu() {

        // --- CHOIX DE SAUCE --- //


        // --- SAUCES BOKIT --- //
        // Choisir bouton radio :  Sauces Bokit
        var bokitSauceRadio = document.getElementById('bokit_sauce');
        // Ajouter une sauce artisanale & image
        var titreImage = document.getElementById('titre_image');
        var imageSection = document.getElementById('image_section');
        var titreSauceBokit = document.getElementById('titre_sauce_bokit');
        var sauceBokitSelect = document.getElementById("sauce_bokit");
        // Ajouter nouvelle sauce artisanale
        var newSauceBokit = document.getElementById("new_sauce_bokit");
        var titrenewSauceBokit = document.getElementById("titre_new_sauce_bokit");
        var addSauceBokitInput = document.getElementById("add_sauce_bokit");

        // --- SAUCES MAISON --- //
        // Choisir bouton radio :  Sauces faite maison
        var maisonSauceRadio = document.getElementById('maison_sauce');
        // Ajouter une sauce maison
        var titreSauceMaison = document.getElementById('titre_sauce_maison');
        var sauceMaisonSelect = document.getElementById('sauce_maison');
        // Nouvelle sauce maison
        var newSauceMaison = document.getElementById('new_sauce_maison');
        var addSauceMaisonInput = document.getElementById('add_sauce_maison');
        var titreNewSauceMaison = document.getElementById('titre_new_sauce_maison');

        // --- AUTRES SAUCES --- //
        // Choisir bouton radio :  autre sauce
        var autreSauceRadio = document.getElementById('autre_sauce');
        // Ajouter une autre sauce
        var titreSauceAutre = document.getElementById('titre_sauce_autre');
        var sauceAutreSelect = document.getElementById('sauce_autre');
        // Nouvelle autre sauce
        var newSauceAutre = document.getElementById('new_sauce_autre');
        var addSauceAutreInput = document.getElementById('add_sauce_autre');
        var titreNewSauceAutre = document.getElementById('titre_new_sauce_autre');


        // --- SAUCES BOKIT - MASQUER --- //
        // Masquer la section d'images
        titreImage.style.display = 'none';
        imageSection.style.display = 'none';
        // Masquer - ajouter sauces bokit
        titreSauceBokit.style.display = 'none';
        sauceBokitSelect.style.display = 'none';
        // Masquer - nouvelle sauces bokit
        newSauceBokit.style.display = "none";
        titrenewSauceBokit.style.display = "none";
        addSauceBokitInput.style.display = "none";

        // --- SAUCES MAISON - MASQUER --- //
        // Masquer - ajouter sauce maison
        titreSauceMaison.style.display = "none";
        sauceMaisonSelect.style.display = "none";
        // Masquer - Nouvelle sauce maison
        newSauceMaison.style.display = "none";
        titreNewSauceMaison.style.display = "none";
        addSauceMaisonInput.style.display = "none";

        // --- AUTRES SAUCES - MASQUER --- //
        // Masquer - ajouter sauce maison
        titreSauceAutre.style.display = "none";
        sauceAutreSelect.style.display = "none";
        // Masquer - Nouvelle sauce maison
        newSauceAutre.style.display = "none";
        titreNewSauceAutre.style.display = "none";
        addSauceAutreInput.style.display = "none";



        // Réinitialiser les champs input en fonction du choix de sauce
        addSauceBokitInput.value = '';
        addSauceMaisonInput.value = '';
        addSauceAutreInput.value = '';


        // Réinitialiser les champs de sélection en fonction du choix de sauce
        if (bokitSauceRadio.checked) {
            sauceMaisonSelect.value = '';
            sauceAutreSelect.value = '';
        }

        if (maisonSauceRadio.checked) {
            sauceBokitSelect.value = '';
            sauceAutreSelect.value = '';
        }

        if (autreSauceRadio.checked) {
            sauceMaisonSelect.value = '';
            sauceBokitSelect.value = '';
        }


        // --- SAUCES BOKIT - AFFICHER --- //
        // Vérifier si le choix de sauce est "artisanale_boisson"
        if (bokitSauceRadio.checked) {
            titreSauceBokit.style.display = 'block';
            sauceBokitSelect.style.display = 'block';
        }

        // Afficher - ajouter SAUCES BOKIT
        if (sauceBokitSelect.value === "0") {
            newSauceBokit.style.display = "block";
        }
        if (bokitSauceRadio.checked && sauceBokitSelect.value === "0") {
            titrenewSauceBokit.style.display = "block";
            addSauceBokitInput.style.display = "block";
        }


        // --- SAUCES MAISON - AFFICHER --- //
        // Vérifier si le choix de sauce est "gazeuse_boisson"
        if (maisonSauceRadio.checked) {
            // Afficher les sections : choisir une sauce maison
            // Afficher les sections : images & choisir une sauces bokit
            titreImage.style.display = 'block';
            imageSection.style.display = 'block';
            titreSauceMaison.style.display = 'block';
            sauceMaisonSelect.style.display = 'block';
        }

        // Afficher - Nouvelle SAUCES MAISON
        if (sauceMaisonSelect.value === "0") {
            newSauceMaison.style.display = "block";
        }
        if (maisonSauceRadio.checked && sauceMaisonSelect.value === "0") {
            titreNewSauceMaison.style.display = "block";
            addSauceMaisonInput.style.display = "block";
        }


        // --- BOISSON AUTRES SAUCES - AFFICHER --- //
        // Vérifier si le choix de sauce est "non_gazeuse_boisson"
        if (autreSauceRadio.checked) {
            // Afficher les sections : choisir une sauce maison
            titreSauceAutre.style.display = 'block';
            sauceAutreSelect.style.display = 'block';
        }
            
        // Afficher - Nouvelle SAUCES MAISON
        if (sauceAutreSelect.value === "0") {
            newSauceAutre.style.display = "block";
        }
        if (autreSauceRadio.checked && sauceAutreSelect.value === "0") {
            titreNewSauceAutre.style.display = "block";
            addSauceAutreInput.style.display = "block";
        }
    }




    //SECURITE - Si ce n'est pas rempli, empêcher la validation en affichant une alert
    function validerFormulaire() {
        
        // IMAGE
        var fichierSelectionne = document.getElementById("formFile").files[0];
        // SAUCE BOKIT
        var bokitSauceRadio = document.getElementById('bokit_sauce');
        var sauceBokitSelect = document.getElementById("sauce_bokit").value;
        var addSauceBokitInput = document.getElementById("add_sauce_bokit");
        // SAUCES MAISON
        var maisonSauceRadio = document.getElementById('maison_sauce');
        var sauceMaisonSelect = document.getElementById('sauce_maison');
        var addSauceMaisonInput = document.getElementById('add_sauce_maison');
        // AUTRES SAUCES
        var autreSauceRadio = document.getElementById('autre_sauce');
        var sauceAutreSelect = document.getElementById('sauce_autre');
        var addSauceAutreInput = document.getElementById('add_sauce_autre');



        // SAUCE BOKIT
        if (bokitSauceRadio.checked && sauceBokitSelect === "") {
            // Affichez une alerte si aucune sauce n'est sélectionnée
            alert("Veuillez sélectionner une sauce bokit avant de valider.");
            return false; // Empêche l'envoi du formulaire
        }
        if (bokitSauceRadio.checked && addSauceBokitInput.value.trim() === "") {
            // Affichez une alerte si le champ est vide
            alert("Veuillez inscrire le nom de la nouvelle sauce bokit.");
            return false; // Empêche l'envoi du formulaire
        }

        // SAUCES MAISON
        if (maisonSauceRadio.checked && sauceMaisonSelect.value === "") {
        // Affichez une alerte si aucune sauce maison n'est sélectionnée
            alert("Veuillez sélectionner une sauce maison.");
            return false; // Empêche l'envoi du formulaire
        }
        if (maisonSauceRadio.checked && addSauceMaisonInput.value.trim() === "") {
            // Affichez une alerte si le champ est vide
            alert("Veuillez inscrire le nom de la nouvelle sauce maison.");
            return false; // Empêche l'envoi du formulaire
        }

        // AUTRES SAUCES
        if (sauceAutreSelect.value === "") {
            // Affichez une alerte si aucune sauce maison n'est sélectionnée
            alert("Veuillez sélectionner une sauce.");
            return false; // Empêche l'envoi du formulaire
        }
        if (autreSauceRadio.checked && addSauceAutreInput.value.trim() === "") {
            // Affichez une alerte si le champ est vide
            alert("Veuillez inscrire le nom de la nouvelle maison.");
            return false; // Empêche l'envoi du formulaire
        }



        // IMAGE - Vérifiez si aucun fichier n'est sélectionné
        if (maisonSauceRadio.checked && !fichierSelectionne) {
            // Affichez une alerte si aucun fichier n'est sélectionné
            alert("Veuillez sélectionner un fichier.");
            return false; // Empêche l'envoi du formulaire
        }

    return true; // Permet la soumission du formulaire
    }

    
    // Ajouter des écouteurs d'événement pour les boutons radio
    document.getElementById('bokit_sauce').addEventListener('change', afficherMenu);
    document.getElementById('maison_sauce').addEventListener('change', afficherMenu);
    document.getElementById('autre_sauce').addEventListener('change', afficherMenu);


</script>
<?php
include_once "../inc/footer.php";
?>