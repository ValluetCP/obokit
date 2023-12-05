<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container">
    <h1 class="m-5">Ajouter une petite faim</h1>
    <form method="post" action="" onsubmit="return validerFormulaire()">
        <h4 class="mt-5">Petits plaisirs & Accompagnements</h4>
        <select name="petite_faim" id="petite_faim" class="form-select" onchange="afficherMenu()">
            <option value="">Sélectionnez...</option>
            <option value="aperitif">Petits plaisirs</option>
            <option value="accompagnement">Accompagnement</option>
        </select>

        <div id="menuAperitif" style="display:none;">
            <h4 class="mt-5">Petits plaisirs</h4>
            <select class="form-select" name="aperitif" id="aperitif" onchange="afficherSousMenu()">
                <option value="">Sélectionnez...</option>
                <option value="pastel">Pastel</option>
                <option value="accras">Accras de morue</option>
            </select>

            <div id="pastelAperitif" style="display:none;">
                <h4 class="mt-5">Pastel</h4>
                <select class="form-select" name="pastel" id="pastel">
                    <option value="">Sélectionnez...</option>
                    <option value="pastel_poulet">Poulet au curry</option>
                    <option value="pastel_boeuf">Boeuf fromage</option>
                    <option value="pastel_crevette">Crevette</option>
                    <option value="pastel_saumon">Saumon</option>
                </select>
            </div>
        </div>

        <div id="menuAccompagnement" style="display:none;">
            <h4 class="mt-5">Accompagnement</h4>
            <select class="form-select" name="accompagnement" id="accompagnement" onchange="afficherSousMenu()">
                <option value="">Sélectionnez...</option>
                <option value="frite">Frite</option>
                <option value="alloco">Alloco</option>
            </select>

            <div id="friteAccompagnement" style="display:none;">
                <h4 class="mt-5">Frite</h4>
                <select class="form-select" name="frite" id="frite">
                    <option value="">Sélectionnez...</option>
                    <option value="pomme_de_terre">Pomme de terre</option>
                    <option value="patate_douce">Patate douce</option>
                </select>
            </div>
        </div>

        <input type="submit" value="Valider" class="mt-5">
    </form>
</div>

<script>
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

        pastelAperitif.style.display = "none";
        friteAccompagnement.style.display = "none";

        if (aperitifSelect.value === "pastel") {
            pastelAperitif.style.display = "block";
        }

        if (accompagnementSelect.value === "frite") {
            friteAccompagnement.style.display = "block";
        }
    }

    
</script>

<?php
include_once "./inc/footer.php";
?>
