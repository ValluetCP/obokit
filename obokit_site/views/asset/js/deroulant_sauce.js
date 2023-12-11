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
    var sauceBokitSelect = document.getElementById("sauce_bokit");
    var addSauceBokitInput = document.getElementById("add_sauce_bokit");
    // SAUCES MAISON
    var maisonSauceRadio = document.getElementById('maison_sauce');
    var sauceMaisonSelect = document.getElementById('sauce_maison');
    var addSauceMaisonInput = document.getElementById('add_sauce_maison');
    // AUTRES SAUCES
    var autreSauceRadio = document.getElementById('autre_sauce');
    var sauceAutreSelect = document.getElementById('sauce_autre');
    var addSauceAutreInput = document.getElementById('add_sauce_autre');

     // Vérifier si au moins une case est cochée
     var isChecked = bokitSauceRadio.checked || maisonSauceRadio.checked || autreSauceRadio.checked;


    // CHOISIR UNE SAUCE
    // Afficher l'alerte si aucune case n'est cochée
    if (!isChecked) {
            alert("Veuillez choisir une sauce !");
            return false; // Empêcher l'envoi du formulaire
        }


    // SAUCE BOKIT
    // Vérifier spécifiquement pour la sauce bokit
    if (bokitSauceRadio.checked) {
        if (sauceBokitSelect.value === "") {
            alert("Veuillez sélectionner une sauce bokit avant de valider.");
            return false; // Empêche l'envoi du formulaire
        } else if (sauceBokitSelect.value === "0" && addSauceBokitInput.value.trim() === "") {
            alert("Veuillez inscrire le nom de la nouvelle sauce bokit.");
            return false; // Empêche l'envoi du formulaire  
        } else if (sauceBokitSelect.value !== "0" || sauceBokitSelect.value !== "") {
            return true; // Permet la soumission du formulaire
        }
    }


    // SAUCES MAISON
    // Vérifier spécifiquement pour la sauce maison
    if (maisonSauceRadio.checked) {
        if (!fichierSelectionne) {
            // Affichez une alerte si aucun fichier n'est sélectionné
            alert("Veuillez sélectionner un fichier.");
        return false; // Empêche l'envoi du formulaire
        } else if (sauceMaisonSelect.value === "") {
            alert("Veuillez sélectionner une sauce maison avant de valider.");
            return false; // Empêche l'envoi du formulaire
        } else if (sauceMaisonSelect.value === "0" && addSauceMaisonInput.value.trim() === "") {
            alert("Veuillez inscrire le nom de la nouvelle sauce maison.");
            return false; // Empêche l'envoi du formulaire  
        } else if (sauceMaisonSelect.value !== "0" || sauceMaisonSelect.value !== "") {
            return true; // Permet la soumission du formulaire
        }
    }

    
    // IMAGE - Vérifiez si aucun fichier n'est sélectionné
    if (maisonSauceRadio.checked && !fichierSelectionne) {
        // Affichez une alerte si aucun fichier n'est sélectionné
        alert("Veuillez sélectionner un fichier.");
        return false; // Empêche l'envoi du formulaire
    }



    // AUTRES SAUCES
    // Vérifier spécifiquement pour la sauce autre
    if (autreSauceRadio.checked) {
        if (sauceAutreSelect.value === "") {
            alert("Veuillez sélectionner une sauce maison avant de valider.");
            return false; // Empêche l'envoi du formulaire
        } else if (sauceAutreSelect.value === "0" && addSauceAutreInput.value.trim() === "") {
            alert("Veuillez inscrire le nom de la nouvelle sauce maison.");
            return false; // Empêche l'envoi du formulaire  
        } else if (sauceAutreSelect.value !== "0" || sauceAutreSelect.value !== "") {
            return true; // Permet la soumission du formulaire
        }
    }
   

    return true; // Permet la soumission du formulaire
}


// Ajouter des écouteurs d'événement pour les boutons radio
document.getElementById('bokit_sauce').addEventListener('change', afficherMenu);
document.getElementById('maison_sauce').addEventListener('change', afficherMenu);
document.getElementById('autre_sauce').addEventListener('change', afficherMenu);