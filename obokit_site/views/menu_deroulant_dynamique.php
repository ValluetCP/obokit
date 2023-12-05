<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container">
    <h1>Menu déroulant dynamique avec formulaire</h1>
    <form method="post" action="" onsubmit="return validerFormulaire()">
        <h4 class="mt-5">Protéines</h4>
        <select name="viande" id="viande" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="poulet">Poulet</option>
            <option value="saumon">Saumon</option>
            <option value="morue">Morue</option>
            <option value="legume">Légume</option>
            <option value="boeuf">Steack bacon de boeuf</option>
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

        <div id="menuSaumon" style="display:none;">
            <h4 class="mt-5">Préparation</h4>
            <selec class="form-select"t name="plat2" id="plat2">
                <option value="fumee">Fumée</option>
            </selec>
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

        <input type="submit" value="Valider" class="mt-5">
    </form>
</div>


<script>
  function afficherMenu() {
    var viandeSelect = document.getElementById("viande");
    var menuPoulet = document.getElementById("menuPoulet");
    var menuSaumon = document.getElementById("menuSaumon");
    var menuMorue = document.getElementById("menuMorue");
    var menuLegume = document.getElementById("menuLegume");
    var menuBoeuf = document.getElementById("menuBoeuf");

    menuPoulet.style.display = "none";
    menuSaumon.style.display = "none";
    menuMorue.style.display = "none";
    menuLegume.style.display = "none";
    menuBoeuf.style.display = "none";

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
    }
  }

  function validerFormulaire() {
    var viandeSelect = document.getElementById("viande");
    var pouletSelect = document.getElementById("poulet");
    
    if (viandeSelect.value === "") {
      alert("Veuillez sélectionner une viande.");
      return false; // Empêche la soumission du formulaire
    }
    
    if (pouletSelect.value === "") {
      alert("Pour votre poulet, veuillez sélectionner une préparation.");
      return false; // Empêche la soumission du formulaire
    }

    return true; // Permet la soumission du formulaire
  }
</script>


<?php
include_once "./inc/footer.php";
?>
