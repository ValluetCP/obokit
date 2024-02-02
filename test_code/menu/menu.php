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
        /* Ajoutez cette règle CSS pour masquer initialement la div list_menu_secondaire */
        .list_menu_secondaire {
            display: none;
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
                <a href="#">BOKIT</a>
                <a href="#">BOWL</a>
                <a href="#" class="active">PETITE FAIM & ACCOMPAGNEMENT</a>
                <a href="#">SAUCE</a>
                <a href="#">DESSERT</a>
                <a href="#">BOISSON</a>
            </div>

            <!-- CARTE - liste menu secondaire -->
            <!-- <div class="list_menu_secondaire">
                <ul class="flex" id="filtre">
                    <li class="active"><a href="#">Tout</a></li>
                    <li><a href="#">Poisson</a></li>
                    <li><a href="#">Poulet</a></li>
                    <li><a href="#">Legume</a></li>
                    <li><a href="#">Crevette</a></li>
                    <li><a href="#">Viande</a></li>
                </ul>
            </div> -->

            <div class="list_menu_secondaire flex">
                <div class="btnChoix">
                    <div class="icone_legende">
                        <p>Tous</p>
                    </div>
                </div>
                <div class="btnChoix" title="poisson">
                    <div class="icone">
                        <img src="../image/poisson3.svg" alt="icone poisson">
                    </div>
                    <p class="icone_legende">poisson</p>
                </div>
                <div class="btnChoix" title="poulet">
                    <div class="icone icone_poulet">
                        <img src="../image/poulet3.svg" alt="icone poulet">
                    </div>
                    <p class="icone_legende">poulet</p>
                </div>
                <div class="btnChoix" title="legume">
                    <div class="icone">
                        <img src="../image/legume3.svg" alt="icone legume">
                    </div>
                    <p class="icone_legende">légume</p>
                </div>
                <div class="btnChoix" title="crevette">
                    <div class="icone icone_crevette">
                        <img src="../image/crevette3.svg" alt="icone crevette">
                    </div>
                    <p class="icone_legende">crevette</p>
                </div>
                <div class="btnChoix" title="viande">
                    <div class="icone icone_viande">
                        <img src="../image/viande3.svg" alt="icone viande">
                    </div>
                    <p class="icone_legende">viande</p>
                </div>
            </div>
        </div>
    </section>

      <!-- Ajoutez un script JavaScript pour gérer le clic sur le lien -->
      <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Sélectionnez le lien MENU
            var menuLink = document.querySelector(".menu-link");

            // Sélectionnez la div list_menu_secondaire
            var menuListeSecondaire = document.querySelector(".list_menu_secondaire");

            // Ajoutez un écouteur d'événements pour le clic sur le lien MENU
            menuLink.addEventListener("click", function (event) {
                // Empêchez le comportement par défaut du lien
                event.preventDefault();

                // Affichez ou masquez la div list_menu_secondaire en fonction de son état actuel
                if (menuListeSecondaire.style.display === "none") {
                    menuListeSecondaire.style.display = "block";
                } else {
                    menuListeSecondaire.style.display = "none";
                }
            });
        });
    </script>
</body>
</html>