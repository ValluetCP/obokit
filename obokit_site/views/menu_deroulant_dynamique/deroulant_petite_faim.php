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
                <input class="form-check-input" type="radio" name="faim" id="petit_plaisir_radio">
                <label class="form-check-label" for="petit_plaisir_radio">
                Petit plaisir
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="faim" id="accompagnement_radio">
                <label class="form-check-label" for="accompagnement_radio">
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
        <div id="menuPetitPlaisir" class="mt-3" style="display:none;">
            <h4 class="mt-5" id="titre_plaisir" >Petit plaisir</h4>
            <select name="plaisir" id="plaisir" class="form-select" onchange="afficherMenu()">
                <option value="">Sélectionnez...</option>
                <option value="0">Aucune - Ajouter un nouveau petit plaisir</option>
                <option value="pastel">Pastel</option>
                <option value="accras">Accras de morue</option>
            </select>
        </div>
        
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
            <h4 class="mt-5" id="titre_accompagnement">Accompagnement</h4>
            <select class="form-select" name="accompagnement" id="accompagnement" onchange="afficherSousMenu()">
                <option value="">Sélectionnez...</option>
                <option value="0">Aucune - Ajouter un nouvel accompagnement</option>
                <option value="frite">Frite</option>
                <option value="alloco">Alloco</option>
            </select>
        </div>

        <!-- ACCOMPAGNEMENT - Ajouter un nouvel (input caché) -->
        <div id="new_accompagnement" class="mt-3" style="display:none;">
            <h4 class="mt-5" id="titre_new_accompagnement">Ajouter un nouvel accompagnement</h4>
            <div>
                <input class="form-control" type="text" placeholder="Inscrivez le nom du 'petit accompagnement'" id="add_accompagnement" name="add_accompagnement">
            </div>
        </div>


        <!-- FRITE - Choisir, Sélectionner (input caché) -->
        <div id="frite_choix" style="display:none;">
            <h4 class="mt-5" id="titre_frite">Frite</h4>
            <select class="form-select" name="frite" id="frite">
                <option value="">Sélectionnez...</option>
                <option value="pomme_de_terre">Pomme de terre</option>
                <option value="patate_douce">Patate douce</option>
            </select>
        </div>


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

        // Choisir bouton radio : Petit plaisir
        var petitPlaisirRadio = document.getElementById('petit_plaisir_radio');
        // Sélectionner un Petit plaisir
        var menuPetitPlaisir = document.getElementById('menuPetitPlaisir');
        var titrePlaisir = document.getElementById('titre_plaisir');
        var plaisirSelect = document.getElementById('plaisir');
        // Ajouter un Petit plaisir
        var newPlaisir = document.getElementById('new_plaisir');
        var titreNewPlaisir = document.getElementById("titre_new_plaisir");
        var addPlaisir = document.getElementById("add_plaisir");
        

        // Sélectionner une Pastel
        var pastelChoix = document.getElementById('pastelChoix');
        var titrePastel = document.getElementById('titre_pastel');
        var pastelSelect = document.getElementById('pastel');
        // Ajouter une Pastel
        var newPastel = document.getElementById('new_pastel');
        var titreNewPastel = document.getElementById("titre_new_pastel");
        var addPastel = document.getElementById("add_pastel");


        // Choisir bouton radio : Accompagnement
        var accompagnementRadio = document.getElementById('accompagnement_radio');
        // Sélectionner un Accompagnement
        var menuAccompagnement = document.getElementById('menuAccompagnement');
        var titreAccompagnement = document.getElementById('titre_accompagnement');
        var accompagnementSelect = document.getElementById('accompagnement');
        // Ajouter un Accompagnement
        var newAccompagnement = document.getElementById('new_accompagnement');
        var titreNewAccompagnement = document.getElementById("titre_new_accompagnement");
        var addAccompagnement = document.getElementById("add_accompagnement");


        // Sélectionner une frite
        var friteChoix = document.getElementById('frite_choix');
        var titreFrite = document.getElementById('titre_frite');
        var friteSelect = document.getElementById('frite');


        
        // --- PETIT PLAISIR - MASQUER --- //

        // Masquer - ajouter Petit plaisir
        menuPetitPlaisir.style.display = 'none';
        titrePlaisir.style.display = 'none';
        plaisirSelect.style.display = 'none';
        // Masquer - nouveau Petit plaisir
        newPlaisir.style.display = "none";
        titreNewPlaisir.style.display = "none";
        addPlaisir.style.display = "none";


        // Réinitialiser les champs input en fonction du choix de boisson
        addBoissonArtisanaleInput.value = '';
        addBoissonGazeuseInput.value = '';
        addBoissonNonGazeuseInput.value = '';


        // --- PETIT PLAISIR - AFFICHER --- //
        // Vérifier si le choix de boisson est "artisanale_boisson"
        if (petitPlaisirRadio.checked) {
            // Afficher les sections : images & choisir une boisson artisanale
            menuPetitPlaisir.style.display = 'block';
            titrePlaisir.style.display = 'block';
            plaisirSelect.style.display = 'block';
        }
        
    }

    // Ajouter des écouteurs d'événement pour les boutons radio
    document.getElementById('petit_plaisir_radio').addEventListener('change', afficherMenu);
    document.getElementById('accompagnement_radio').addEventListener('change', afficherMenu);


    
</script>

<?php
include_once "../inc/footer.php";
?>
