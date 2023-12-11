<?php
include_once "../inc/header.php";
include_once "../inc/nav.php";
?>

<div class="container">

        
    <h1 class="m-5  text-center">Ajouter une petite faim</h1>
    
    <form method="post" action="../traitement/action.php" onsubmit="return validerFormulaire()"  enctype="multipart/form-data">

        <!-- CHOIX PETITE FAIM -->
        <h4 class="mt-5 mb-3">Veuillez faire un choix</h4>
        <div id="faim_choix">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="faim" id="petit_plaisir">
                <label class="form-check-label" for="petit_plaisir">
                Petit plaisir
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="faim" id="accompagnement">
                <label class="form-check-label" for="accompagnement">
                Accompagnement
                </label>
            </div> 
        </div>

        
        <!-- IMAGE - uniquement réservée aux BOISSONS ARTISANALES -->
        <h4 class="mt-5" id="titre_image">Image</h4>
        <div class="mb-3" id="image_section">
            <label for="formFile" class="form-label">Format image 363px x 247px</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <!-- PETIT PLAISIR - Choisir, Sélectionner (input caché) -->
        <h4 class="mt-5" id="titre_plaisir" >Petit plaisir</h4>
        <select name="plaisir" id="plaisir" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="0">Aucune - Ajouter un  nouveau petit plaisir</option>
            <option value="pastel">Pastel</option>
            <option value="accras">Accras de morue</option>
        </select>

        <!-- PETIT PLAISIR - Ajouter une nouvelle (input caché) -->
        <div id="new_plaisir" class="mt-3" style="display:none;">
            <h4 class="mt-5" id="titre_new_plaisir">Ajouter un nouveau petit plaisir</h4>
            <div>
                <input class="form-control" type="text" placeholder="Inscrivez le nom du 'petit plaisir'" id="add_plaisir" name="add_plaisir">
            </div>
        </div>

        <!-- PASTEL - Choisir, Sélectionner (input caché) -->
        <div id="pastelChoix" style="display:none;">
            <h4 class="mt-5" id="titre_pastel">Pastel</h4>
            <select class="form-select" name="pastel" id="pastel">
                <option value="">Sélectionnez...</option>
                <option value="0">Aucune - Ajouter un nouveau pastel</option>
                <option value="pastel_poulet">Poulet au curry</option>
                <option value="pastel_boeuf">Boeuf fromage</option>
                <option value="pastel_crevette">Crevette</option>
                <option value="pastel_saumon">Saumon fumée</option>
            </select>
        </div>
 
        <!-- PASTEL - Ajouter un nouveeau (input caché) -->
        <div id="new_pastel" class="mt-3" style="display:none;">
            <h4 class="mt-5" id="titre_new_pastel">Ajouter un nouveau petit pastel</h4>
            <div>
                <input class="form-control" type="text" placeholder="Inscrivez le nom du 'petit pastel'" id="add_pastel" name="add_pastel">
            </div>
        </div>

        <!-- ACCOMPAGNEMENT - Choisir, Sélectionner (input caché) -->
        <div id="menuAccompagnement" style="display:none;">
            <h4 class="mt-5">Accompagnement</h4>
            <select class="form-select" name="accompagnement" id="accompagnement" onchange="afficherSousMenu()">
                <option value="">Sélectionnez...</option>
                <option value="0">Aucune - Ajouter un nouvel accompagnement</option>
                <option value="frite">Frite</option>
                <option value="alloco">Alloco</option>
            </select>
        </div>

        <!-- ACCOMPAGNEMENT - Ajouter un nouvel (input caché) -->
        <div id="new_pastel" class="mt-3" style="display:none;">
            <h4 class="mt-5" id="titre_new_pastel">Ajouter un nouveau petit pastel</h4>
            <div>
                <input class="form-control" type="text" placeholder="Inscrivez le nom du 'petit pastel'" id="add_pastel" name="add_pastel">
            </div>
        </div>


        <!-- FRITE - Ajouter un nouvel (input caché) -->


        <!-- SAUCE PASTEL & ACCOMPAGNEMENT- Ajouter une nouvelle (input caché) -->
        <div id="sauce" style="display:none;">
            <h4 class="mt-5" id="titre_sauce">Sauce</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="sauce_choix" checked>
                <label class="form-check-label" for="sauce_choix">
                    Sauce au choix
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="sauce_tomate">
                <label class="form-check-label" for="sauce_tomate">
                    Sauce tomate maison
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="sauce_creoline">
                <label class="form-check-label" for="sauce_creoline">
                    Sauce créoline
                </label>
            </div>
        </div>

        <!-- PASTEL - Ajouter un nouvel ingrédient (input caché) -->
        <h4 class="mt-5" id="titre_ingredient" style="display:none;">Ingrédients</h4>
        <div class="form-floating mt-2" id="commentaireSection" style="display:none;">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="commentaire"></textarea>
            <label for="floatingTextarea">Inscrire la liste des ingrédients</label>
        </div>


        <div id="menuPetitPlaisir" style="display:none;">
            <h4 class="mt-5">Petits plaisirs</h4>
            <select class="form-select" name="petit_plaisir" id="petit_plaisir" onchange="afficherSousMenu()">
                <option value="">Sélectionnez...</option>
                <option value="pastel">Pastel</option>
                <option value="accras">Accras de morue</option>
            </select>

            <div id="pastelAperitif" style="display:none;">
                <h4 class="mt-5">Pastel</h4>
                <select class="form-select" name="pastel" id="pastel">
                    <option value="">Sélectionnez...</option>
                    <option value="pastel_poulet">Poulet au curry</option>
                    <option value="pastel_boeuf">Boeuf fromage</option>
                    <option value="pastel_crevette">Crevette</option>
                    <option value="pastel_saumon">Saumon fumée</option>
                </select>
            </div>
        </div>

        <div id="menuAccompagnement" style="display:none;">
            <h4 class="mt-5">Accompagnement</h4>
            <select class="form-select" name="accompagnement" id="accompagnement" onchange="afficherSousMenu()">
                <option value="">Sélectionnez...</option>
                <option value="frite">Frite</option>
                <option value="alloco">Alloco</option>
            </select>

            <div id="friteAccompagnement" style="display:none;">
                <h4 class="mt-5">Frite</h4>
                <select class="form-select" name="frite" id="frite">
                    <option value="">Sélectionnez...</option>
                    <option value="pomme_de_terre">Pomme de terre</option>
                    <option value="patate_douce">Patate douce</option>
                </select>
            </div>
        </div>

        <div id="sauce" style="display:none;">
            <h4 class="mt-5">Sauce</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="sauce_choix" checked>
                <label class="form-check-label" for="sauce_choix">
                    Sauce au choix
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="sauce_tomate">
                <label class="form-check-label" for="sauce_tomate">
                    Sauce tomate maison
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="sauce_creoline">
                <label class="form-check-label" for="sauce_creoline">
                    Sauce créoline
                </label>
            </div>
        </div>

        <h4 class="mt-5" id="ingredientTitre" style="display:none;">Ingrédients</h4>
        <div class="form-floating mt-2" id="commentaireSection" style="display:none;">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="commentaire"></textarea>
            <label for="floatingTextarea">Inscrire la liste des ingrédients</label>
        </div>

        <input type="submit" value="Valider" class="mt-5">
    </form>

    <div id="erreur" style="display:none; color: red;" class="mt-5">
        Veuillez sélectionner une option dans chaque menu.
    </div>
</div>

<script>
    function afficherMenu() {
        var petiteFaimSelect = document.getElementById("petite_faim");
        var menuAperitif = document.getElementById("menuAperitif");
        var menuAccompagnement = document.getElementById("menuAccompagnement");

        menuAperitif.style.display = "none";
        menuAccompagnement.style.display = "none";

        if (petiteFaimSelect.value === "aperitif") {
            menuAperitif.style.display = "block";
        } else if (petiteFaimSelect.value === "accompagnement") {
            menuAccompagnement.style.display = "block";
        }
    }


    function afficherSousMenu() {
        var aperitifSelect = document.getElementById("aperitif");
        var menuAperitif = document.getElementById("menuAperitif");
        var pastelAperitif = document.getElementById("pastelAperitif");
        var accompagnementSelect = document.getElementById("accompagnement");
        var menuAccompagnement = document.getElementById("menuAccompagnement");
        var friteAccompagnement = document.getElementById("friteAccompagnement");
        var ingredientTitre = document.getElementById("ingredientTitre");
        var commentaireSection = document.getElementById("commentaireSection");
        var sauceSelect = document.getElementById("sauce");
        
        

        pastelAperitif.style.display = "none";
        friteAccompagnement.style.display = "none";
        ingredientTitre.style.display = "none";
        commentaireSection.style.display = "none";
        sauceSelect.style.display = "none";


        if (aperitifSelect.value === "pastel") {
            pastelAperitif.style.display = "block";
            ingredientTitre.style.display = "block";
            commentaireSection.style.display = "block";
            sauceSelect.style.display = "block";
        }

        if (accompagnementSelect.value === "frite") {
            friteAccompagnement.style.display = "block";
            sauceSelect.style.display = "block";
        }
    }

    function validerFormulaire() {
        var petiteFaimSelect = document.getElementById("petite_faim");
        var aperitifSelect = document.getElementById("aperitif");
        var pastelSelect = document.getElementById("pastel");
        var accompagnementSelect = document.getElementById("accompagnement");
        var friteSelect = document.getElementById("frite");
        var commentaire = document.getElementById('floatingTextarea');

        var inputFichier = document.getElementById('formFile');
        var fichierSelectionne = inputFichier.files[0];

        var erreurDiv = document.getElementById("erreur");


        // Réinitialise l'affichage de l'erreur à chaque validation
        erreurDiv.style.display = "none";

        // Vérifie chaque niveau de sélection et affiche une alerte si c'est vide
        if (petiteFaimSelect.value === "") {
            alert("Veuillez sélectionner une catégorie.");
            return false; // Empêche la soumission du formulaire
        }

        if (petiteFaimSelect.value === "aperitif" && aperitifSelect.value === "") {
            alert("Pour les petits plaisirs, veuillez sélectionner une option.");
            return false; // Empêche la soumission du formulaire
        }

        if (aperitifSelect.value === "pastel" && pastelSelect.value === "") {
            alert("Pour le pastel, veuillez sélectionner une option.");
            return false; // Empêche la soumission du formulaire
        }

        if (petiteFaimSelect.value === "accompagnement" && accompagnementSelect.value === "") {
            alert("Pour l'accompagnement, veuillez sélectionner une option.");
            return false; // Empêche la soumission du formulaire
        }

        if (accompagnementSelect.value === "frite" && friteSelect.value === "") {
            alert("Pour les frites, veuillez sélectionner une option.");
            return false; // Empêche la soumission du formulaire
        }

        if (aperitifSelect.value === "pastel" && pastelSelect.value === "" && commentaire.value === "") {
            alert("Veuillez saisir la liste des ingrédients.");
            return false; // Empêche la soumission du formulaire
        }
        
        if (!fichierSelectionne) {
            alert("Veuillez sélectionner un fichier avant de soumettre le formulaire.");
            return false; // Empêche la soumission du formulaire
        }

        return true; // Permet la soumission du formulaire
    }
</script>

<?php
include_once "../inc/footer.php";
?>
