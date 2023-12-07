<?php
include_once "../inc/header.php";
include_once "../inc/nav.php";
?>

<div class="container">

    <h1 class=" text-center">Ajouter un boisson</h1>

    <form method="post" action="../traitement/action.php" onsubmit="return validerFormulaire()" enctype="multipart/form-data">

        <!-- CHOIX DE BOISSON -->
        <h4 class="mt-5 mb-3">Veuillez choisir le type de boisson à ajouter</h4>
        <div id="boisson_choix">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="boisson" id="artisanale_boisson" checked>
                <label class="form-check-label" for="artisanale_boisson">
                Boisson artisanale
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="boisson" id="gazeuse_boisson">
                <label class="form-check-label" for="gazeuse_boisson">
                Autre boisson gazeuse
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="boisson" id="non_gazeuse_boisson">
                <label class="form-check-label" for="non_gazeuse_boisson">
                Autre boisson non gazeuse
                </label>
            </div>
            
        </div>


        <!-- IMAGE - uniquement réservée aux BOISSONS ARTISANALES -->
        <h4 class="mt-5" id="titre_image">Image</h4>
        <div class="mb-3" id="image_section">
            <label for="formFile" class="form-label">Format image 363px x 247px</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <!-- BOISSON ARTISANALE -->
        <h4 class="mt-5" id="titre_boisson_artisanale" >Boisson Artisanale</h4>
        <select name="boisson_artisanale" id="boisson_artisanale" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="0">Aucune - Ajouter une nouvelle boisson "artisanale"</option>
            <option value="1">Gingembre O'Bokit</option>
            <option value="2">Bissap O'Bokit</option>
        </select>

        <!-- AJOUTER BOISSON ARTISANALE - input caché -->
        <div id="new_boisson_artisanale" class="mt-3" style="display:none;">
            <h4 class="mt-5" id="titre_new_boisson_artisanale">Ajouter une nouvelle boisson artisanale</h4>
            <div>
                <input class="form-control" type="text" placeholder="Inscrivez le nom de la boisson" id="add_boisson_artisanale" name="add_boisson_artisanale">
            </div>
        </div>


        <!-- BOISSON GAZEUSE -->
        <h4 class="mt-5"  id="titre_boisson_gazeuse">Autre boisson gazeuse</h4>
        <select name="boisson_gazeuse" id="boisson_gazeuse" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="0">Aucune - Ajouter une nouvelle boisson "gazeuse"</option>
            <option value="1">Eau gazeuse</option>
            <option value="2">Coca-Cola</option>
            <option value="3">Coca-Cola zéro</option>
            <option value="4">Ordinaire</option>
            <option value="5">Kola champion</option>
        </select>

        <!-- BOISSON GAZEUSE - input caché-->
        <div id="new_boisson_gazeuse" style="display:none;">
            <h4 class="mt-5">Ajouter une nouvelle boisson gazeuse</h4>
            <div>
                <input class="form-control" type="text" placeholder="Inscrivez le nom de la boisson" id="add_boisson_gazeuse" name="add_boisson_gazeuse">
            </div>
        </div>


        <!-- BOISSON NON GAZEUSE -->
        <h4 class="mt-5" id="titre_boisson_non_gazeuse">Autre boisson non gazeuse</h4>
        <select name="boisson_non_gazeuse" id="boisson_non_gazeuse" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="0">Aucune - Ajouter une nouvelle boisson "non gazeuse"</option>
            <option value="1">Eau plate</option>
            <option value="2">Tropico tropical</option>
            <option value="3">Ice tea</option>
        </select>
        <!-- BOISSON NON GAZEUSE - input caché -->               
        <div id="new_boisson_gazeuse" style="display:none;">
            <h4 class="mt-5">Ajouter une nouvelle boisson gazeuse</h4>
            <div>
                <input class="form-control" type="text" placeholder="Inscrivez le nom de la boisson" id="add_boisson_gazeuse" name="add_boisson_gazeuse">
            </div>
        </div>


        <input type="submit" value="Ajouter un boisson" class="my-5" name="ajouter_boisson">
    </form>
</div>

<script>

function afficherMenu() {

    // --- BOISSON ARTISANALE --- //

    // Ajouter une boisson
    var artisanaleBoissonRadio = document.getElementById('artisanale_boisson');
    var titreImage = document.getElementById('titre_image');
    var imageSection = document.getElementById('image_section');
    var titreBoissonArtisanale = document.getElementById('titre_boisson_artisanale');
    var boissonArtisanaleSelect = document.getElementById("boisson_artisanale");

    // ajouter boisson artisanale
    var newBoissonArtisanale = document.getElementById("new_boisson_artisanale");
    var titreNewBoissonArtisanale = document.getElementById("titre_new_boisson_artisanale");
    var addBoissonArtisanaleInput = document.getElementById("add_boisson_artisanale");
    


    // Masquer la section d'images
    titreImage.style.display = 'none';
    imageSection.style.display = 'none';
    titreBoissonArtisanale.style.display = 'none';
    boissonArtisanaleSelect.style.display = 'none';
    // Masquer - ajouter boisson artisanale
    newBoissonArtisanale.style.display = "none";
    titreNewBoissonArtisanale.style.display = "none";
    addBoissonArtisanaleInput.style.display = "none";


   
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


    // --- BOISSON GAZEUSE --- //

}

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


    // Ajouter des écouteurs d'événement pour les boutons radio
    document.getElementById('artisanale_boisson').addEventListener('change', afficherMenu);
    document.getElementById('gazeuse_boisson').addEventListener('change', afficherMenu);
    document.getElementById('non_gazeuse_boisson').addEventListener('change', afficherMenu);

    
</script>
<?php
include_once "../inc/footer.php";
?>