
// Afficher en fonction de l'élément sélectionné'

// function afficherMenu() {

//     // AJOUTER UNE PETITE FAIM => add_petite_faim.php
//     var petiteFaimSelect = document.getElementById("petite_faim");
//     var menuAperitif = document.getElementById("menuAperitif");
//     var menuAccompagnement = document.getElementById("menuAccompagnement");

//     menuAperitif.style.display = "none";
//     menuAccompagnement.style.display = "none";

//     if (petiteFaimSelect.value === "aperitif") {
//         menuAperitif.style.display = "block";
//     } else if (petiteFaimSelect.value === "accompagnement") {
//         menuAccompagnement.style.display = "block";
//     }
// }

// function afficherSousMenu() {
//   var aperitifSelect = document.getElementById("aperitif");
//   var menuAperitif = document.getElementById("menuAperitif");
//   var pastelAperitif = document.getElementById("pastelAperitif");

//   pastelAperitif.style.display = "none";

//   if (aperitifSelect.value === "pastel") {
//       pastelAperitif.style.display = "block";
//   }

//   if (menuAperitif.value === "pastel") {
//       pastelAperitif.style.display = "block";
//   }
// }


function afficherMenu() {

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

function afficherSousMenu() {
  var friteSelect = document.getElementById("frite");
  var friteAccompagnement = document.getElementById("friteAccompagnement");
  // var menuAperitif = document.getElementById("menuAperitif");
  // var pastelAperitif = document.getElementById("pastelAperitif");

  // pastelAperitif.style.display = "none";
  friteAccompagnement.style.display = "none";

  if (friteSelect.value === "pomme_de_terre") {
    friteAccompagnement.style.display = "block";
  }
}

// function afficherSousMenu() {
//   var friteSelect = document.getElementById("frite");
//   var friteAccompagnement = document.getElementById("friteAccompagnement");
//   // var menuAperitif = document.getElementById("menuAperitif");
//   // var pastelAperitif = document.getElementById("pastelAperitif");

//   // pastelAperitif.style.display = "none";
//   friteAccompagnement.style.display = "none";

//   if (friteSelect.value === "pomme_de_terre") {
//     friteAccompagnement.style.display = "block";
//   }
// }


    
    
  

  