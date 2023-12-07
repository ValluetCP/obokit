<?php
include_once "../inc/header.php";
include_once "../inc/nav.php";
?>

<div class="container">
    <h1>Déroulant bokit</h1>
    <form method="post" action="../traitement/action.php" onsubmit="return validerFormulaire()" enctype="multipart/form-data">

        <h4 class="mt-5">Images</h4>
        <div class="mb-3">
            <label for="formFile" class="form-label">Format image 363px x 247px</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <h4 class="mt-5">Protéines</h4>
        <select name="viande" id="viande" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="poulet">Poulet</option>
            <option value="saumon">Saumon</option>
            <option value="morue">Morue</option>
            <option value="legume">Légume</option>
            <option value="boeuf">Steack bacon de boeuf</option>
            <option value="jambon">Jambon fromage</option>
            <option value="vide">Aucun</option>
        </select>

        <div id="menuPoulet" style="display:none;">
            <h4 class="mt-5">Préparation</h4>
            <select class="form-select" name="poulet" id="poulet">
                <option value="">Sélectionnez...</option>
                <option value="boucane">Boucané</option>
                <option value="yassa">Yassa</option>
                <option value="boucaneBananePlantain">Boucané banane plantain</option>
                <option value="marinadeMaison">Marinade maison</option>
            </select>
        </div>

        <div id="new_bokit" style="display:none;">
            <h4 class="mt-5">Ajouter une nouvelle protéine</h4>
            <div>
                <input class="form-control" type="text" placeholder="Viande ou autre aliment central" id="new_proteine">
            </div>
        </div>

        <div id="new_preparation" style="display:none;">
            <h4 class="mt-5">Ajouter une nouvelle préparation</h4>
            <div>
                <input class="form-control" type="text" placeholder="Assaisonnement ou autre " id="add_preparation">
            </div>
        </div>

        <div id="menuSaumon" style="display:none;">
            <h4 class="mt-5">Préparation</h4>
            <select class="form-select" name="plat2" id="plat2">
                <option value="fumee">Fumée</option>
            </select>
        </div>

        <div id="menuMorue" style="display:none;">
            <h4 class="mt-5">Préparation</h4>
            <select class="form-select" name="plat3" id="plat3">
                <option value="chiquetaille">Chiquetaille</option>
            </select>
        </div>

        <div id="menuLegume" style="display:none;">
            <h4 class="mt-5">Préparation</h4>
            <select class="form-select" name="plat4" id="plat4">
                <option value="vegetarien">Végétarien</option>
            </select>
        </div>

        <div id="menuBoeuf" style="display:none;">
            <h4 class="mt-5">Préparation</h4>
            <select class="form-select" name="plat5" id="plat5">
                <option value="complet">Complet</option>
            </select>
        </div>


        <h2 class="mb-4 mt-5">Ingrédients</h2>

        <h4>Sauces</h4>
        <ul class="list-group">
            <li class="list-group-item">
                <input class="form-check-input me-1 sauce" type="checkbox" value="" id="sauce_chien" name="sauce_chien">
                <label class="form-check-label" for="sauce_chien">sauce chien</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 sauce" type="checkbox" value="" id="sauce_blanche" name="sauce_blanche">
                <label class="form-check-label" for="sauce_blanche">sauce blanche</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 sauce" type="checkbox" value="" id="sauce_cocktail" name="sauce_cocktail">
                <label class="form-check-label" for="sauce_cocktail">sauce cocktail</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 sauce" type="checkbox" value="" id="sauce_poivre" name="sauce_poivre">
                <label class="form-check-label" for="sauce_poivre">sauce poivre</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 sauce" type="checkbox" value="" id="moutarde" name="moutarde">
                <label class="form-check-label" for="moutarde">moutarde</label>
            </li>
        </ul>

        <h4 class="mt-5">Légumes & crudités</h4>
        <ul class="list-group">
            <li class="list-group-item">
                <input class="form-check-input me-1 legumes" type="checkbox" value="" id="salade" name="salade">
                <label class="form-check-label" for="salade">salade</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 legumes" type="checkbox" value="" id="tomate" name="tomate">
                <label class="form-check-label" for="tomate">tomate</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 legumes" type="checkbox" value="" id="oignon_rouge" name="oignon_rouge">
                <label class="form-check-label" for="oignon_rouge">oignon rouge</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 legumes" type="checkbox" value="" id="carotte" name="carotte">
                <label class="form-check-label" for="carotte">carotte</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 legumes" type="checkbox" value="" id="citron" name="citron">
                <label class="form-check-label" for="citron">citron</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 legumes" type="checkbox" value="" id="olive" name="olive">
                <label class="form-check-label" for="olive">olive</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 legumes" type="checkbox" value="" id="champignon" name="champignon">
                <label class="form-check-label" for="champignon">champignon</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1 legumes" type="checkbox" value="" id="avocat" name="avocat">
                <label class="form-check-label" for="avocat">avocat</label>
            </li>
        </ul>

        <input type="submit" value="Ajouter un bokit" class="my-5" name="ajouter_bokit">
    </form>
</div>


<script>
  function afficherMenu() {

    // Ajouter un bokit
    var viandeSelect = document.getElementById("viande");
    var menuPoulet = document.getElementById("menuPoulet");
    var menuSaumon = document.getElementById("menuSaumon");
    var menuMorue = document.getElementById("menuMorue");
    var menuLegume = document.getElementById("menuLegume");
    var menuBoeuf = document.getElementById("menuBoeuf");
    var newBokit = document.getElementById("new_bokit");

    // Fonction pour afficher ou masquer le new_preparation en fonction du champ new_proteine
    var newProteineInput = document.getElementById('new_proteine');
    var newPreparation = document.getElementById('new_preparation');

    

    menuPoulet.style.display = "none";
    menuSaumon.style.display = "none";
    menuMorue.style.display = "none";
    menuLegume.style.display = "none";
    menuBoeuf.style.display = "none";
    newBokit.style.display = "none";

    newPreparation.style.display = 'none';


    if (viandeSelect.value === "poulet") {
        menuPoulet.style.display = "block";
    } else if (viandeSelect.value === "saumon") {
        menuSaumon.style.display = "block";
    } else if (viandeSelect.value === "morue") {
        menuMorue.style.display = "block";
    } else if (viandeSelect.value === "legume") {
        menuLegume.style.display = "block";
    } else if (viandeSelect.value === "boeuf") {
        menuBoeuf.style.display = "block";
    } else if (viandeSelect.value === "vide") {
        newBokit.style.display = "block";
    }
    
    // Vérifier si le champ new_proteine est rempli
    if (newProteineInput.value !== '') {
        // Afficher le new_preparation
        newPreparation.style.display = 'block';
    }
  }




  function validerFormulaire() {
    var viandeSelect = document.getElementById("viande");
    var pouletSelect = document.getElementById("poulet");

    // Sélectionnez toutes les cases à cocher avec le nom "sauces"
    var casesSauces = document.querySelectorAll('.sauce:checked');

    // Sélectionnez toutes les cases à cocher avec le nom "legumes"
    var casesLegumes = document.querySelectorAll('.legumes:checked');

    // Remplir tous les champs
    var newProteineInput = document.getElementById('new_proteine');
    var newPreparation = document.getElementById('new_preparation');
    var addPreparationInput = document.getElementById('add_preparation');

    // Sélectionner obligatoirement une image
    var inputFichier = document.getElementById('formFile');
    var fichierSelectionne = inputFichier.files[0];

    
    if (viandeSelect.value === "") {
      alert("Veuillez sélectionner une viande.");
      return false; // Empêche la soumission du formulaire
    }
    
    // Vérifier si le champ new_proteine est vide
    if (newProteineInput.value === '') {
            // Afficher une alerte
            alert("Veuillez remplir le champ 'Pour votre bokit, veuillez saisir une protéine.'");
    }

    if (addPreparationInput.value === '') {
            // Afficher une alerte
            alert("Pour votre viande ou autre aliment central, veuillez saisir une préparation");
    }

    if (viandeSelect.value === "poulet" && pouletSelect.value === "") {
      alert("Pour votre poulet, veuillez sélectionner une préparation.");
      return false; // Empêche la soumission du formulaire
    }

    // Vérifiez si aucune case n'est cochée
    if (casesSauces.length === 0) {
            // Affichez une alerte si aucune case n'est cochée
            alert("Veuillez choisir au moins une sauce.");
        } 

    // Vérifiez si aucune case n'est cochée
    if (casesLegumes.length === 0) {
            // Affichez une alerte si aucune case n'est cochée
            alert("Veuillez choisir au moins un légume ou une crudité.");
        }
    
    if (!fichierSelectionne) {
            alert("Veuillez sélectionner un fichier avant de soumettre le formulaire.");
            return false; // Empêche la soumission du formulaire
    }


     // Vérifiez les autres sélections
     if (
            document.getElementById("plat2").value !== "" ||
            document.getElementById("plat3").value !== "" ||
            document.getElementById("plat4").value !== "" ||
            document.getElementById("plat5").value !== ""
        ) {
          return true; // Permet la soumission du formulaire
      }

    return true; // Permet la soumission du formulaire
  }


  
// Ajouter un écouteur d'événement pour le champ new_proteine
document.getElementById('new_proteine').addEventListener('input', afficherMenu);
</script>


<?php
include_once "../inc/footer.php";
?>
