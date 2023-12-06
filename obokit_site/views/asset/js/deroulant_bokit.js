


// afficher la/ les préparations en fonction de la viande choisi

function afficherMenu() {

    // AJOUTER UN BOKIT => add_bokit.php
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


    // AJOUTER UNE PETITE FAIM => add_petite_faim.php
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


// empêcher l'envoi du formulaire si l'utilisateur n'a pas sélectionné de 'viande' ni de 'préparation'
function validerFormulaire() {
  var viandeSelect = document.getElementById("viande");
  var pouletSelect = document.getElementById("poulet");

  var inputFichier = document.getElementById('formFile');
  var fichierSelectionne = inputFichier.files[0];

  
  if (viandeSelect.value === "") {
    alert("Veuillez sélectionner une viande.");
    return false; // Empêche la soumission du formulaire
  }
 

  if (viandeSelect.value === "poulet" && pouletSelect.value === "") {
    alert("Pour votre poulet, veuillez sélectionner une préparation.");
    return false; // Empêche la soumission du formulaire
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


    
    
  

  