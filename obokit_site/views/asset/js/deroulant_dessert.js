function validerFormulaire() {


    // Vérifiez si aucune dessert n'est sélectionnée
    var dessertSelectionnee = document.getElementById("dessert").value;

    // Vérifiez si aucun fichier n'est sélectionné
    var fichierSelectionne = document.getElementById("formFile").files[0];


    if (dessertSelectionnee === "") {
            // Affichez une alerte si aucune sauce n'est sélectionnée
            alert("Veuillez sélectionner un dessert.");
            return false; // Empêche l'envoi du formulaire
    }

    if (!fichierSelectionne) {
        // Affichez une alerte si aucun fichier n'est sélectionné
        alert("Veuillez sélectionner un fichier.");
        return false; // Empêche l'envoi du formulaire
    }

    return true; // Permet la soumission du formulaire
}