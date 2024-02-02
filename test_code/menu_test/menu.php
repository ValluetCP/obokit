<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="menu.css">
    <title>Test menu - Section 5</title>

    <style>
        .btnChoix{
            cursor: pointer;
        }
    </style>


</head>
<body>
    <!-- SECTION 5 -->
    <section  class="section5">

        <h2>Notre<br><span>Carte</span></h2>

        <div class="carte">
            <!-- CARTE - liste menu principale -->
            <div class="list_menu_principale flex">
                <a href="#" class="menu-link">MENU</a>
                <a href="#" class="bokit-link">BOKIT</a>
                <a href="#" class="bowl-link">BOWL</a>
                <a href="#" class="petiteFaim-link" class="active">PETITE FAIM & ACCOMPAGNEMENT</a>
                <a href="#" class="sauce-link">SAUCE</a>
                <a href="#" class="dessert-link">DESSERT</a>
                <a href="#" class="boisson-link">BOISSON</a>
            </div>

            <!-- CARTE - liste menu secondaire -->

            <div class="list_menu_secondaire"  id="filtre">

            <!-- Tous -->
                <div class="btnChoix" title="tous" id="tous">
                    <div class="icone_legende">
                        <p>Tous</p>
                    </div>
                </div>

                <!-- Poisson -->
                <div class="btnChoix" title="poisson" id="poisson">
                    <div class="icone">
                        <img src="../image/poisson3.svg" alt="icone poisson">
                    </div>
                    <p class="icone_legende">poisson</p>
                </div>

                <!-- Poulet -->
                <div class="btnChoix" title="poulet" id="poulet">
                    <div class="icone icone_poulet">
                        <img src="../image/poulet3.svg" alt="icone poulet">
                    </div>
                    <p class="icone_legende">poulet</p>
                </div>

                <!-- Légumes -->
                <div class="btnChoix" title="legume" id="legume">
                    <div class="icone">
                        <img src="../image/legume3.svg" alt="icone legume">
                    </div>
                    <p class="icone_legende">légume</p>
                </div>

                <!-- Crevette -->
                <div class="btnChoix" title="crevette" id="crevette">
                    <div class="icone icone_crevette">
                        <img src="../image/crevette3.svg" alt="icone crevette">
                    </div>
                    <p class="icone_legende">crevette</p>
                </div>

                <!-- Viande -->
                <div class="btnChoix" title="viande" id="viande">
                    <div class="icone icone_viande">
                        <img src="../image/viande3.svg" alt="icone viande">
                    </div>
                    <p class="icone_legende">viande</p>
                </div>
            </div>
        </div>

        <!-- CARTE - Bokit -->
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
        </div>
    </section>

      <!-- Ajoutez un script JavaScript pour gérer le clic sur le lien -->

      <script>

        // ---- LISTE PRINCIPALE ---- //

        document.addEventListener("DOMContentLoaded", function () {

            // Sélectionnez un lien de la liste principale (MENU, BOKIT,...)
            var menuLink = document.querySelector(".menu-link");
            var bokitLink = document.querySelector(".bokit-link");
            var bowlLink = document.querySelector(".bowl-link");
            var petiteFaimLink = document.querySelector(".petiteFaim-link");
            var sauceLink = document.querySelector(".sauce-link");
            var dessertLink = document.querySelector(".dessert-link");
            var boissonLink = document.querySelector(".boisson-link");


            // Sélectionnez la div list_menu_secondaire
            var menuListeSecondaire = document.querySelector(".list_menu_secondaire");
            var menuBokit = document.querySelector(".bokit");

            // Ajoutez un écouteur d'événements pour le clic sur le lien MENU
            bokitLink.addEventListener("click", function (event) {
                // Empêchez le comportement par défaut du lien
                event.preventDefault();

                // Affichez ou masquez la div list_menu_secondaire en fonction de son état actuel
                if (menuListeSecondaire.style.display === "none") {
                    menuListeSecondaire.style.display = "inline-flex";
                    menuBokit.style.display = "block";
                } else {
                    menuListeSecondaire.style.display = "none";
                    menuBokit.style.display = "none";
                }
            });
        });



        // ---- LISTE SECONDAIRE ---- //

        document.addEventListener("DOMContentLoaded", function () {

            // Sélectionnez un lien de la liste secondaire (POISSON, POULET,...)
            var tousBtn = document.getElementById("tous");

            // Sélectionnez le bouton avec l'id "poisson"
            var poissonBtn = document.getElementById("poisson");
            var pouletBtn = document.getElementById("poulet");
            var legumeBtn = document.getElementById("legume");
            var crevetteBtn = document.getElementById("crevette");
            var viandeBtn = document.getElementById("viande");

            // Sélectionnez toutes les figures avec la classe "poisson" dans la section "bokit"
            var figuresPoisson = document.querySelectorAll(".bokit .poisson");
            var figuresPoulet = document.querySelectorAll(".bokit .poulet");
            var figuresLegume = document.querySelectorAll(".bokit .legume");
            var figuresCrevette = document.querySelectorAll(".bokit .crevette");
            var figuresViande = document.querySelectorAll(".bokit .viande");


            // ---- BOUTON - POISSON ---- //
            // Ajoutez un écouteur d'événements pour le clic sur le bouton "poisson"
            poissonBtn.addEventListener("click", function () {
                // Parcourez toutes les figures "poisson" et affichez-les
                figuresPoisson.forEach(function (figure) {
                    figure.style.display = "block";
                });
            });

            // ---- BOUTON - POULET ---- //
            pouletBtn.addEventListener("click", function () {
                // Parcourez toutes les figures "poisson" et affichez-les
                figuresPoulet.forEach(function (figure) {
                    figure.style.display = "block";
                });
            });


        });
    </script>
</body>
</html>