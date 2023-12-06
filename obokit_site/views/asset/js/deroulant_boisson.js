function validerFormulaire() {


    // Vérifiez si aucune boisson n'est sélectionnée
    var boissonSelectionnee = document.getElementById("boisson").value;

    // Vérifiez si aucun fichier n'est sélectionné
    var fichierSelectionne = document.getElementById("formFile").files[0];


    if (boissonSelectionnee === "") {
            // Affichez une alerte si aucune sauce n'est sélectionnée
            alert("Veuillez sélectionner un boisson.");
            return false; // Empêche l'envoi du formulaire
    }

    if (!fichierSelectionne) {
        // Affichez une alerte si aucun fichier n'est sélectionné
        alert("Veuillez sélectionner un fichier.");
        return false; // Empêche l'envoi du formulaire
    }

    return true; // Permet la soumission du formulaire
}