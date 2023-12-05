<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu déroulant dynamique avec formulaire</title>
</head>
<body>

<form method="post" action="">
  <label for="viande">Choisissez une viande :</label>
  <select name="viande" id="viande" onchange="afficherMenu()">
    <option value="">Sélectionnez...</option>
    <option value="poulet">Poulet</option>
    <option value="saumon">Saumon</option>
    <option value="morue">Morue</option>
    <option value="legume">Légume</option>
    <option value="boeuf">Steack bacon de boeuf</option>
  </select>

  <div id="menuPoulet" style="display:none;">
    <label for="plat1">Choisissez un plat de poulet :</label>
    <select name="plat1" id="plat1">
      <option value="boucane">Boucané</option>
      <option value="yassa">Yassa</option>
      <option value="boucaneBananePlantain">Boucané banane plantain</option>
      <option value="marinadeMaison">Marinade maison</option>
    </select>
  </div>

  <div id="menuSaumon" style="display:none;">
    <label for="plat2">Choisissez un plat de saumon :</label>
    <select name="plat2" id="plat2">
      <option value="fumee">Fumée</option>
    </select>
  </div>

  <div id="menuMorue" style="display:none;">
    <label for="plat3">Choisissez un plat de morue :</label>
    <select name="plat3" id="plat3">
      <option value="chiquetaille">Chiquetaille</option>
    </select>
  </div>

  <div id="menuLegume" style="display:none;">
    <label for="plat4">Choisissez un plat végétarien :</label>
    <select name="plat4" id="plat4">
      <option value="vegetarien">Végétarien</option>
    </select>
  </div>

  <div id="menuBoeuf" style="display:none;">
    <label for="plat5">Choisissez un plat de boeuf :</label>
    <select name="plat5" id="plat5">
      <option value="complet">Complet</option>
    </select>
  </div>

  <input type="submit" value="Valider">
</form>

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
</script>

</body>
</html>
