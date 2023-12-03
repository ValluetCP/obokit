<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test filtre</title>
    <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="lightbox.css" />

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
    <script type="text/javascript" src="./site.js"></script>
</head>

<body>
    <div class="container">
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
        <div class="flex" id="portfolio">
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
        </div>

    </div>
</body>

</html>