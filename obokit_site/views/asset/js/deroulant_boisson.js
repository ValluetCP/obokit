
    // Au chargement de la page, faire apparaître uniquement le menu radio "choix des boissons"

    document.addEventListener('DOMContentLoaded', function () {
        // Masquer les sections autres que "choix de boisson" au chargement initial
        document.getElementById('titre_image').style.display = 'none';
        document.getElementById('image_section').style.display = 'none';
        document.getElementById('titre_boisson_artisanale').style.display = 'none';
        document.getElementById('boisson_artisanale').style.display = 'none';
        document.getElementById('new_boisson_artisanale').style.display = 'none';
        document.getElementById('titre_boisson_gazeuse').style.display = 'none';
        document.getElementById('boisson_gazeuse').style.display = 'none';
        document.getElementById('new_boisson_gazeuse').style.display = 'none';
        document.getElementById('titre_boisson_non_gazeuse').style.display = 'none';
        document.getElementById('boisson_non_gazeuse').style.display = 'none';
        document.getElementById('new_non_boisson_gazeuse').style.display = 'none';

    });

function afficherMenu() {

    // --- BOISSON ARTISANALE --- //

    // Choisir bouton radio :  boisson artisanale
    var artisanaleBoissonRadio = document.getElementById('artisanale_boisson');
    // Ajouter une boisson artisanale & image
    var titreImage = document.getElementById('titre_image');
    var imageSection = document.getElementById('image_section');
    var titreBoissonArtisanale = document.getElementById('titre_boisson_artisanale');
    var boissonArtisanaleSelect = document.getElementById("boisson_artisanale");
    // Ajouter nouvelle boisson artisanale
    var newBoissonArtisanale = document.getElementById("new_boisson_artisanale");
    var titreNewBoissonArtisanale = document.getElementById("titre_new_boisson_artisanale");
    var addBoissonArtisanaleInput = document.getElementById("add_boisson_artisanale");

    // --- BOISSON GAZEUSE --- //
    // Choisir bouton radio :  boisson gazeuse
    var gazeuseBoissonRadio = document.getElementById('gazeuse_boisson');
    // Ajouter une boisson gazeuse
    var titreBoissonGazeuse = document.getElementById('titre_boisson_gazeuse');
    var boissonGazeuseSelect = document.getElementById('boisson_gazeuse');
    // Nouvelle boisson gazeuse
    var newBoissonGazeuse = document.getElementById('new_boisson_gazeuse');
    var addBoissonGazeuseInput = document.getElementById('add_boisson_gazeuse');
    var titreNewBoissonGazeuse = document.getElementById('titre_new_boisson_gazeuse');

    // --- BOISSON NON GAZEUSE --- //
    // Choisir bouton radio :  boisson gazeuse
    var nonGazeuseBoissonRadio = document.getElementById('non_gazeuse_boisson');
    // Ajouter une boisson gazeuse
    var titreBoissonNonGazeuse = document.getElementById('titre_boisson_non_gazeuse');
    var boissonNonGazeuseSelect = document.getElementById('boisson_non_gazeuse');
    // Nouvelle boisson gazeuse
    var newBoissonNonGazeuse = document.getElementById('new_non_boisson_gazeuse');
    var addBoissonNonGazeuseInput = document.getElementById('add_boisson_non_gazeuse');
    var titreNewBoissonNonGazeuse = document.getElementById('titre_new_boisson_non_gazeuse');
    

    // --- BOISSON ARTISANALE - MASQUER --- //
    // Masquer la section d'images
    titreImage.style.display = 'none';
    imageSection.style.display = 'none';
    // Masquer - ajouter boisson artisanale
    titreBoissonArtisanale.style.display = 'none';
    boissonArtisanaleSelect.style.display = 'none';
    // Masquer - nouvelle boisson artisanale
    newBoissonArtisanale.style.display = "none";
    titreNewBoissonArtisanale.style.display = "none";
    addBoissonArtisanaleInput.style.display = "none";

    // --- BOISSON GAZEUSE - MASQUER --- //
    // Masquer - ajouter boisson gazeuse
    titreBoissonGazeuse.style.display = "none";
    boissonGazeuseSelect.style.display = "none";
    // Masquer - Nouvelle boisson gazeuse
    newBoissonGazeuse.style.display = "none";
    titreNewBoissonGazeuse.style.display = "none";
    addBoissonGazeuseInput.style.display = "none";

    // --- BOISSON NON GAZEUSE - MASQUER --- //
    // Masquer - ajouter boisson gazeuse
    titreBoissonNonGazeuse.style.display = "none";
    boissonNonGazeuseSelect.style.display = "none";
    // Masquer - Nouvelle boisson gazeuse
    newBoissonNonGazeuse.style.display = "none";
    titreNewBoissonNonGazeuse.style.display = "none";
    addBoissonNonGazeuseInput.style.display = "none";



    // Réinitialiser les champs input en fonction du choix de boisson
    addBoissonArtisanaleInput.value = '';
    addBoissonGazeuseInput.value = '';
    addBoissonNonGazeuseInput.value = '';


    // Réinitialiser les champs de sélection en fonction du choix de boisson
    if (artisanaleBoissonRadio.checked) {
        boissonGazeuseSelect.value = '';
        boissonNonGazeuseSelect.value = '';
    }

    if (gazeuseBoissonRadio.checked) {
        boissonArtisanaleSelect.value = '';
        boissonNonGazeuseSelect.value = '';
    }

    if (nonGazeuseBoissonRadio.checked) {
        boissonGazeuseSelect.value = '';
        boissonArtisanaleSelect.value = '';
    }


    // --- BOISSON ARTISANALE - AFFICHER --- //
    // Vérifier si le choix de boisson est "artisanale_boisson"
    if (artisanaleBoissonRadio.checked) {
        // Afficher les sections : images & choisir une boisson artisanale
        titreImage.style.display = 'block';
        imageSection.style.display = 'block';
        titreBoissonArtisanale.style.display = 'block';
        boissonArtisanaleSelect.style.display = 'block';
    }
    
    // Afficher - ajouter boisson artisanale
    if (boissonArtisanaleSelect.value === "0") {
        newBoissonArtisanale.style.display = "block";
    }
    if (artisanaleBoissonRadio.checked && boissonArtisanaleSelect.value === "0") {
        titreNewBoissonArtisanale.style.display = "block";
        addBoissonArtisanaleInput.style.display = "block";
    }


    // --- BOISSON GAZEUSE - AFFICHER --- //
    // Vérifier si le choix de boisson est "gazeuse_boisson"
    if (gazeuseBoissonRadio.checked) {
        // Afficher les sections : choisir une boisson gazeuse
        titreBoissonGazeuse.style.display = 'block';
        boissonGazeuseSelect.style.display = 'block';
    }
    
    // Afficher - Nouvelle boisson gazeuse
    if (boissonGazeuseSelect.value === "0") {
        newBoissonGazeuse.style.display = "block";
    }
    if (gazeuseBoissonRadio.checked && boissonGazeuseSelect.value === "0") {
        titreNewBoissonGazeuse.style.display = "block";
        addBoissonGazeuseInput.style.display = "block";
    }


    // --- BOISSON NON GAZEUSE - AFFICHER --- //
    // Vérifier si le choix de boisson est "non_gazeuse_boisson"
    if (nonGazeuseBoissonRadio.checked) {
        // Afficher les sections : choisir une boisson gazeuse
        titreBoissonNonGazeuse.style.display = 'block';
        boissonNonGazeuseSelect.style.display = 'block';
    }
        
    // Afficher - Nouvelle boisson gazeuse
    if (boissonNonGazeuseSelect.value === "0") {
        newBoissonNonGazeuse.style.display = "block";
    }
    if (nonGazeuseBoissonRadio.checked && boissonNonGazeuseSelect.value === "0") {
        titreNewBoissonNonGazeuse.style.display = "block";
        addBoissonNonGazeuseInput.style.display = "block";
    }
}

    function validerFormulaire() {

        // Vérifiez si aucune boisson n'est sélectionnée
        // var boissonSelectionnee = document.getElementById("boisson").value;
        var boissonArtisanaleSelect = document.getElementById("boisson_artisanale");


        // Vérifiez si aucun fichier n'est sélectionné
        var fichierSelectionne = document.getElementById("formFile").files[0];



        if (artisanaleBoissonRadio.checked && boissonArtisanaleSelect === " ") {
                // Affichez une alerte si aucune sauce n'est sélectionnée
                alert("Veuillez sélectionner un boisson.");
                return false; // Empêche l'envoi du formulaire
        }

        if (artisanaleBoissonRadio.checked && !fichierSelectionne) {
            // Affichez une alerte si aucun fichier n'est sélectionné
            alert("Veuillez sélectionner un fichier.");
            return false; // Empêche l'envoi du formulaire
        }

        return true; // Permet la soumission du formulaire
    }


    // Ajouter des écouteurs d'événement pour les boutons radio
    document.getElementById('artisanale_boisson').addEventListener('change', afficherMenu);
    document.getElementById('gazeuse_boisson').addEventListener('change', afficherMenu);
    document.getElementById('non_gazeuse_boisson').addEventListener('change', afficherMenu);
