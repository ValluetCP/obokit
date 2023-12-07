
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

// Ajouter un écouteur d'événement pour le champ new_proteine
document.getElementById('new_proteine').addEventListener('input', afficherMenu);

function validerFormulaire() {
  var viandeSelect = document.getElementById("viande");
  var pouletSelect = document.getElementById("poulet");

  // Sélectionnez toutes les cases à cocher avec le nom "sauces"
  var casesSauces = document.querySelectorAll('.sauce:checked');

  // Sélectionnez toutes les cases à cocher avec le nom "legumes"
  var casesLegumes = document.querySelectorAll('.legumes:checked');


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

    
    
  

  