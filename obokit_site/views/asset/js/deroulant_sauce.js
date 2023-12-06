function validerFormulaire() {

    // Vérifiez si aucune sauce n'est sélectionnée
    var sauceSelectionnee = document.getElementById("sauce_indiv").value;

    // Vérifiez si aucun fichier n'est sélectionné
    var fichierSelectionne = document.getElementById("formFile").files[0];


    if (sauceSelectionnee === "") {
            // Affichez une alerte si aucune sauce n'est sélectionnée
            alert("Veuillez sélectionner une sauce.");
            return false; // Empêche l'envoi du formulaire
    }

    if (!fichierSelectionne) {
        // Affichez une alerte si aucun fichier n'est sélectionné
        alert("Veuillez sélectionner un fichier.");
        return false; // Empêche l'envoi du formulaire
    }

return true; // Permet la soumission du formulaire
}