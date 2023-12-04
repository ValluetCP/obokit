<?php
$contenu = "<p>Accedebant enim eius asperitati, ubi inminuta vel laesa amplitudo imperii dicebatur, et iracundae suspicionum quantitati proximorum cruentae blanditiae exaggerantium incidentia et dolere inpendio simulantium, si principis periclitetur vita, a cuius salute velut filo pendere statum orbis terrarum fictis vocibus exclamabant.</p>";
if (isset($_GET['carte'])) {
    $carte = $_GET['carte'];


    switch ($carte) {
        case 0:
            $contenu = '
    <div class="flex">
        <ul class="nav flex" id="filtre">
            <li class="active"><a href="#">Tout</a></li>
            <li><a href="#">Poisson</a></li>
            <li><a href="#">Poulet</a></li>
            <li><a href="#">Legume</a></li>
            <li><a href="#">Crevette</a></li>
            <li><a href="#">Viande</a></li>
        </ul>
    </div>
    <div class="flex bokit" id="portfolio">
        <figure class="poulet">
            <div class="fond_noir">
                <img src="./image/poulet_b_b.jpg" alt="">
            </div>
            <h4><span>poulet</span><br>boucané banane plantain</h4>
            <p>Sauce chien, sauce cocktail, salade, tomate, oignon rouge, cheddar.</p>
            <hr>
        </figure>
        <figure class="poisson">
            <div class="fond_noir">
                <img src="./image/poisson_saumon.jpg" alt="">
            </div>
            <h4><span>SAUMON</span><br>fumée</h4>
            <p>Sauce blanche, salade, tomate, oignon rouge, avocat, parmesan.</p>
            <hr>
        </figure>
        <figure class="poulet">
            <div class="fond_noir">
                <img src="./image/poulet_yassa.jpg" alt="">
            </div>
            <h4><span>poulet</span><br>yassa</h4>
            <p>Salade, tomate, olive, oignon rouge, carotte,moutarde, citron.</p>
            <hr>
        </figure>
        <figure class="poisson">
            <div class="fond_noir">
                <img src="./image/poisson_morue.jpg" alt="">
            </div>
            <h4><span>MORUE</span><br>CHIQUETAILLE</h4>
            <p>Sauce chien, sauce blanche, salade, tomate, oignon rouge, avocat.</p>
            <hr>
        </figure>
        <figure class="poulet">
            <div class="fond_noir">
                <img src="./image/poulet_b_b.jpg" alt="">
            </div>
            <h4><span>poulet</span><br>boucané banane plantain</h4>
            <p>Sauce chien, sauce cocktail, salade, tomate, oignon rouge, cheddar.</p>
            <hr>
        </figure>
        <figure class="poisson">
            <div class="fond_noir">
                <img src="./image/poisson_saumon.jpg" alt="">
            </div>
            <h4><span>SAUMON</span><br>fumée</h4>
            <p>Sauce blanche, salade, tomate, oignon rouge, avocat, parmesan.</p>
            <hr>
        </figure>
        <figure class="poulet">
            <div class="fond_noir">
                <img src="./image/poulet_yassa.jpg" alt="">
            </div>
            <h4><span>poulet</span><br>yassa</h4>
            <p>Salade, tomate, olive, oignon rouge, carotte,moutarde, citron.</p>
            <hr>
        </figure>
        <figure class="poisson">
            <div class="fond_noir">
                <img src="./image/poisson_morue.jpg" alt="">
            </div>
            <h4><span>MORUE</span><br>CHIQUETAILLE</h4>
            <p>Sauce chien, sauce blanche, salade, tomate, oignon rouge, avocat.</p>
            <hr>
        </figure>
    </div>';
            break;
        case 1:
            $contenu = "<h1>François 1er</h1>
        <img src=\"./img/francois-1.jpg\" class=\"imgRoi\">
        <p>Quare talis improborum consensio non modo excusatione amicitiae tegenda non est sed potius supplicio omni vindicanda est, ut ne quis concessum putet amicum vel bellum patriae inferentem sequi; quod quidem, ut res ire coepit, haud scio an aliquando futurum sit. Mihi autem non minori curae est, qualis res publica post mortem meam futura, quam qualis hodie sit.

        Exsistit autem hoc loco quaedam quaestio subdifficilis, num quando amici novi, digni amicitia, veteribus sint anteponendi, ut equis vetulis teneros anteponere solemus. Indigna homine dubitatio! Non enim debent esse amicitiarum sicut aliarum rerum satietates; veterrima quaeque, ut ea vina, quae vetustatem ferunt, esse debet suavissima; verumque illud est, quod dicitur, multos modios salis simul edendos esse, ut amicitiae munus expletum sit.
        </p>
        <p>
            Vita est illis semper in fuga uxoresque mercenariae conductae ad tempus ex pacto atque, ut sit species matrimonii, dotis nomine futura coniunx hastam et tabernaculum offert marito, post statum diem si id elegerit discessura, et incredibile est quo ardore apud eos in venerem uterque solvitur sexus.
        </p>
        <p>Quare talis improborum consensio non modo excusatione amicitiae tegenda non est sed potius supplicio omni vindicanda est, ut ne quis concessum putet amicum vel bellum patriae inferentem sequi; quod quidem, ut res ire coepit, haud scio an aliquando futurum sit. Mihi autem non minori curae est, qualis res publica post mortem meam futura, quam qualis hodie sit.

        Exsistit autem hoc loco quaedam quaestio subdifficilis, num quando amici novi, digni amicitia, veteribus sint anteponendi, ut equis vetulis teneros anteponere solemus. Indigna homine dubitatio! Non enim debent esse amicitiarum sicut aliarum rerum satietates; veterrima quaeque, ut ea vina, quae vetustatem ferunt, esse debet suavissima; verumque illud est, quod dicitur, multos modios salis simul edendos esse, ut amicitiae munus expletum sit.
        </p>
        <p>
            Vita est illis semper in fuga uxoresque mercenariae conductae ad tempus ex pacto atque, ut sit species matrimonii, dotis nomine futura coniunx hastam et tabernaculum offert marito, post statum diem si id elegerit discessura, et incredibile est quo ardore apud eos in venerem uterque solvitur sexus.
        </p>";
            break;
        case 2:
            $contenu = "<h1>Charles IX</h1>
        <img src=\"./img/charles-9.jpg\" class=\"imgRoi\">
        <p>Quare talis improborum consensio non modo excusatione amicitiae tegenda non est sed potius supplicio omni vindicanda est, ut ne quis concessum putet amicum vel bellum patriae inferentem sequi; quod quidem, ut res ire coepit, haud scio an aliquando futurum sit. Mihi autem non minori curae est, qualis res publica post mortem meam futura, quam qualis hodie sit.

        Exsistit autem hoc loco quaedam quaestio subdifficilis, num quando amici novi, digni amicitia, veteribus sint anteponendi, ut equis vetulis teneros anteponere solemus. Indigna homine dubitatio! Non enim debent esse amicitiarum sicut aliarum rerum satietates; veterrima quaeque, ut ea vina, quae vetustatem ferunt, esse debet suavissima; verumque illud est, quod dicitur, multos modios salis simul edendos esse, ut amicitiae munus expletum sit.
        </p>
        <p>
            Vita est illis semper in fuga uxoresque mercenariae conductae ad tempus ex pacto atque, ut sit species matrimonii, dotis nomine futura coniunx hastam et tabernaculum offert marito, post statum diem si id elegerit discessura, et incredibile est quo ardore apud eos in venerem uterque solvitur sexus.
        </p>";
            break;
        case 3:
            $contenu = '
            <div class="fond_noir">
            <img src="./image/poulet_yassa.jpg" alt="">
            </div>
            
            <dl id="accordeon">
                <dt>POULET CURRY</dt>
                <dd>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque dignissimos earum rerum suscipit! Nulla veniam, consequatur atque praesentium at et.</dd>
                
                <dt>BEUF FROMAGE</dt>
                <dd>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque dignissimos earum rerum suscipit! Nulla veniam, consequatur atque praesentium at et.</dd>
                
                <dt>CREVETTE</dt>
                <dd>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque dignissimos earum rerum suscipit! Nulla veniam, consequatur atque praesentium at et.</dd>
                
                <dt>SAUMON</dt>
                <dd>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque dignissimos earum rerum suscipit! Nulla veniam, consequatur atque praesentium at et.</dd>
            </dl>
            ';
            break;

        default:
            # code...
            break;
    }
}

?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <title>Obokit - Notre carte</title>
    <meta name="description" content="Une phrase d’environ 170 caractères">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css" />
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="lightbox.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
    <script type="text/javascript" src="./site.js"></script>
    <script type="text/javascript" src="./accordeon.js"></script>
</head>

<body>
    <div class="container">
        <h1><span>Notre</span>CARTE</h1>

        <div class="carte flex">
            <a href="?carte=0">MENU</a>
            <a href="?carte=1">BOKIT</a>
            <a href="?carte=2">BOWL</a>
            <a href="?carte=3">PETITE FAIM & ACCOMPAGNEMENT</a>
            <a href="?carte=4">SAUCE</a>
            <a href="?carte=5">DESSERT</a>
            <a href="?carte=6">BOISSON</a>
        </div>
        <div class="carte_contenu">
            <?= $contenu ?>
        </div>
    </div>
</body>

</html>