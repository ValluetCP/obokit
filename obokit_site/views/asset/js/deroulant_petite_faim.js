
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
