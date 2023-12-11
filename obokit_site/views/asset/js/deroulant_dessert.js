document.addEventListener('DOMContentLoaded', function () {
    // Masquer les sections autres que "choix de boisson" au chargement initial
    document.getElementById('titre_image').style.display = 'none';
    document.getElementById('image_section').style.display = 'none';
    

});


function afficherMenu() {
    
    // Ajouter un dessert & image
    var titreImage = document.getElementById('titre_image');
    var imageSection = document.getElementById('image_section');
    var titreDessert = document.getElementById('titre_dessert');
    var dessertSelect = document.getElementById("dessert");
    // Ajouter nouveau dessert
    var newDessert = document.getElementById("new_dessert");
    var titreNewDessert = document.getElementById("titre_new_dessert");
    var addDessertInput = document.getElementById("add_dessert");


    // --- DESSERT - MASQUER --- //
    // Masquer la section d'images
    titreImage.style.display = 'none';
    imageSection.style.display = 'none';
    // Masquer - nouveau dessert
    newDessert.style.display = "none";
    titreNewDessert.style.display = "none";
    addDessertInput.style.display = "none";


    // Afficher - nouveau dessert
    if (dessertSelect.value === "0") {
        titreImage.style.display = 'block';
        imageSection.style.display = 'block';
        newDessert.style.display = "block";
        titreNewDessert.style.display = "block";
        addDessertInput.style.display = "block";
    }
    
    if (dessertSelect.value !== "") {
        titreImage.style.display = 'block';
        imageSection.style.display = 'block';
    }
    
}


function validerFormulaire() {

    // Vérifiez si aucun fichier n'est sélectionné
    var fichierSelectionne = document.getElementById("formFile").files[0];
    // Ajouter un dessert 
    var titreDessert = document.getElementById('titre_dessert');
    var dessertSelect = document.getElementById("dessert");
    // Ajouter nouveau dessert
    var newDessert = document.getElementById("new_dessert");
    var titreNewDessert = document.getElementById("titre_new_dessert");
    var addDessertInput = document.getElementById("add_dessert");


    if (dessertSelect.value === "") {
            // Affichez une alerte si aucune sauce n'est sélectionnée
            alert("Veuillez sélectionner un dessert.");
            return false; // Empêche l'envoi du formulaire
    }

    if (dessertSelect.value === "0" && addDessertInput.value.trim() === "") {
            // Affichez une alerte si aucune sauce n'est sélectionnée
            alert("Veuillez inscrir un nouveau dessert.");
            return false; // Empêche l'envoi du formulaire
    }

    if (!fichierSelectionne) {
        // Affichez une alerte si aucun fichier n'est sélectionné
        alert("Veuillez sélectionner un fichier.");
        return false; // Empêche l'envoi du formulaire
    }

    return true; // Permet la soumission du formulaire
}