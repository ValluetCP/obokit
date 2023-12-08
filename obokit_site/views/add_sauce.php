<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container">
    <h1>Ajouter une sauce</h1>
    <form method="post" action="../traitement/action.php" onsubmit="return validerFormulaire()" enctype="multipart/form-data">

    
        <!-- CHOIX DE SAUCE -->
        <h4 class="mt-5 mb-3">Veuillez choisir le type de sauce à ajouter</h4>
        <div id="sauce_choix">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="bokit_sauce">
                <label class="form-check-label" for="bokit_sauce">
                Sauce bokit
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="maison_sauce">
                <label class="form-check-label" for="maison_sauce">
                Sauce maison (petite faim & format individuel)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sauce" id="autre_sauce">
                <label class="form-check-label" for="autre_sauce">
                Autre sauce
                </label>
            </div>
        </div>

        
        <!-- IMAGE - uniquement réservée aux 'SAUCES MAISONS' & 'AUTRES SAUCES' -->
        <h4 class="mt-5" id="titre_image">Images</h4>
        <div class="mb-3" id="image_section">
            <label for="formFile" class="form-label">Format image 363px x 247px</label>
            <input class="form-control" type="file" id="formFile">
        </div>


        
        <!-- 'SAUCES BOKIT' - Choisir, Sélectionner (input caché) -->
        <h4 class="mt-5" id="titre_sauce_bokit">Sauces Bokit</h4>
        <select name="sauce_bokit" id="sauce_bokit" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="0">Aucune - Ajouter une nouvelle sauce pour bokit</option>
            <option value="sauce_chien">Sauce chien</option>
            <option value="sauce_blanche">Sauce blanche</option>
            <option value="sauce_poivre">Sauce poivre</option>
            <option value="sauce_cocktail">Sauce cocktail</option>
            <option value="sauce_thai">Sauce thai</option>
            <option value="sauce_massala">Sauce massala</option>
        </select>

        
        <!-- 'SAUCES BOKIT' - Ajouter une nouvelle (input caché) -->
        <div id="new_sauce_bokit" class="mt-3" style="display:none;">
            <h4 class="mt-5" id="titre_new_sauce_bokit">Ajouter une nouvelle sauce bokit</h4>
            <div>
                <input class="form-control" type="text" placeholder="Inscrivez le nom de la sauce" id="add_sauce_bokit" name="add_sauce_bokit">
            </div>
        </div>

        
        <!-- 'SAUCES MAISON' - Choisir, Sélectionner (input caché) -->
        <h4 class="mt-5" id="titre_sauce_maison">Sauces faite maison</h4>
        <select name="sauce_maison" id="sauce_maison" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="0">Aucune - Ajouter une nouvelle sauce faite maison</option>
            <option value="sauce_creoline">Sauce créoline</option>
            <option value="sauce_tomate_maison">Sauce tomate maison</option>
        </select>
                
        <!-- 'SAUCES MAISON' - Ajouter une nouvelle (input caché) -->
        <div id="new_sauce_maison" class="mt-3" style="display:none;">
            <h4 class="mt-5" id="titre_new_sauce_maison">Ajouter une nouvelle sauce maison</h4>
            <div>
                <input class="form-control" type="text" placeholder="Inscrivez le nom de la sauce" id="add_sauce_maison" name="add_sauce_maison">
            </div>
        </div>


        <!-- 'AUTRES SAUCES' - Choisir, Sélectionner (input caché) -->
        <h4 class="mt-5" id="titre_sauce_autre">Autre sauces</h4>
        <select name="sauce_autre" id="sauce_autre" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="0">Aucune - Ajouter une nouvelle autre sauce</option>
            <option value="moutarde">Moutarde</option>
            <option value="ketchup">Ketchup</option>
            <option value="mayonnaise">Mayonnaise</option>
            <option value="barbecue">Barbecue</option>
        </select>
                        
        <!-- 'AUTRES SAUCES' - Ajouter une nouvelle (input caché) -->
        <div id="new_sauce_autre" class="mt-3" style="display:none;">
            <h4 class="mt-5" id="titre_new_sauce_autre">Ajouter une nouvelle sauce autre</h4>
            <div>
                <input class="form-control" type="text" placeholder="Inscrivez le nom de la sauce" id="add_sauce_autre" name="add_sauce_autre">
            </div>
        </div>

        <input type="submit" value="Ajouter une sauce" class="my-5" name="ajouter_sauce">
    </form>
</div>

<script src="./asset/js/deroulant_sauce.js"></script>
<?php
include_once "./inc/footer.php";
?>