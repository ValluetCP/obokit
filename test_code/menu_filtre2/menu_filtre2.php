<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <title>Obokit - Notre carte</title>
    <meta name="description" content="Une phrase d’environ 170 caractères">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../menu_test/menu.css"> -->
    <link rel="stylesheet" href="menu_filtre2.css">
    <link rel="stylesheet" href="lightbox.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
    <script type="text/javascript" src="./site.js"></script>
    <script type="text/javascript" src="./accordeon.js"></script>
    
</head>

<body>

    <!-- SECTION 5 -->
    <div class="section5">
        <h2>Notre<br><span>Carte</span></h2>

        <div class="carte">

            <!-- CARTE - liste menu principale -->
            <div class="list_menu_principale flex">
                <a href="#" class="menu-link">MENU</a>
                <a href="#" class="bokit-link" id="bokit-link">BOKIT</a>
                <a href="#" class="bowl-link">BOWL</a>
                <a href="#" class="petiteFaim-link" class="active">PETITE FAIM & ACCOMPAGNEMENT</a>
                <a href="#" class="sauce-link">SAUCE</a>
                <a href="#" class="dessert-link">DESSERT</a>
                <a href="#" class="boisson-link">BOISSON</a>
            </div>

            <div class="carte_contenu">
                <div id="list_menu_secondaire">

                    <ul class="filtre_choix flex"  id="filtre">
                        <li class="btnChoix active" id="tout">
                            <a href="#">Tout</a>
                        </li>
                        <li>
                            <a href="#" class="btnChoix" id="poisson" title="poisson">Poisson</a>
                        </li>
                        <li>
                            <a href="#" class="btnChoix" id="poulet" title="poulet">Poulet</a>
                        </li>
                        <li>
                            <a href="#" class="btnChoix" id="legume" title="legume">Legume</a>
                        </li>
                        <li>
                            <a href="#" class="btnChoix" id="crevette" title="crevette">Crevette</a>
                        </li>
                        <li>
                            <a href="#" class="btnChoix" id="viande" title="viande">Viande</a>
                        </li>
                    </ul>
                </div>


                <!-- BOWL -->
                <div class="flex  filtre_ingredient" id="list_bowl">
                    <figure class="poulet">
                        <div class="fond_noir">
                            <img src="../image/bowl_complet_uber.JPG" alt="">
                        </div>
                        <h4><span>poulet</span><br>boucané banane plantain</h4>
                        <p>Sauce chien, sauce cocktail, salade, tomate, oignon rouge, cheddar.</p>
                    </figure>

                    <figure class="viande">
                        <div class="fond_noir">
                            <img src="../image/bowl_complet_uber.JPG" alt="">
                        </div>
                        <h4><span>complet</span><br>yassa</h4>
                        <p>Salade, tomate, olive, oignon rouge, carotte,moutarde, citron.</p>
                    </figure>

                    <figure class="poisson">
                        <div class="fond_noir">
                            <img src="../image/bowl_morue_uber.JPG" alt="">
                        </div>
                        <h4><span>MORUE</span><br>CHIQUETAILLE</h4>
                        <p>Sauce chien, sauce blanche, salade, tomate, oignon rouge, avocat.</p>
                    </figure>

                    <figure class="legume">
                        <div class="fond_noir">
                            <img src="../image/bowl_vegan_uber.JPG" alt="">
                        </div>
                        <h4><span>legume</span><br>boucané banane plantain</h4>
                        <p>Sauce chien, sauce cocktail, salade, tomate, oignon rouge, cheddar.</p>
                    </figure>
                </div>

                <!-- BOKIT -->
                <div class="flex list_bokit filtre_ingredient">
                    <figure class="poulet">
                        <div class="fond_noir">
                            <img src="../image/bokit_poulet_uber.JPG" alt="">
                        </div>
                        <h4><span>poulet</span><br>boucané banane plantain</h4>
                        <p>Sauce chien, sauce cocktail, salade, tomate, oignon rouge, cheddar.</p>
                    </figure>
                    
                    <figure class="poulet">
                        <div class="fond_noir">
                            <img src="../image/bokit_banane_uber.JPG" alt="">
                        </div>
                        <h4><span>poulet</span><br>yassa</h4>
                        <p>Salade, tomate, olive, oignon rouge, carotte,moutarde, citron.</p>
                    </figure>

                    <figure class="poulet">
                        <div class="fond_noir">
                            <img src="../image/poulet_b_b.jpg" alt="">
                        </div>
                        <h4><span>poulet</span><br>boucané banane plantain</h4>
                        <p>Sauce chien, sauce cocktail, salade, tomate, oignon rouge, cheddar.</p>
                    </figure>

                    <figure class="poisson">
                        <div class="fond_noir">
                            <img src="../image/bokit_vegan_uber.JPG" alt="">
                        </div>
                        <h4><span>SAUMON</span><br>fumée</h4>
                        <p>Sauce blanche, salade, tomate, oignon rouge, avocat, parmesan.</p>
                    </figure>

                    <figure class="poisson">
                        <div class="fond_noir">
                            <img src="../image/poisson_morue.jpg" alt="">
                        </div>
                        <h4><span>MORUE</span><br>CHIQUETAILLE</h4>
                        <p>Sauce chien, sauce blanche, salade, tomate, oignon rouge, avocat.</p>
                    </figure>

                    <figure class="legume">
                        <div class="fond_noir">
                            <img src="../image/poulet_yassa.jpg" alt="">
                        </div>
                        <h4><span>legume</span><br>yassa</h4>
                        <p>Salade, tomate, olive, oignon rouge, carotte,moutarde, citron.</p>
                    </figure>

                    <figure class="viande">
                        <div class="fond_noir">
                            <img src="../image/poulet_yassa.jpg" alt="">
                        </div>
                        <h4><span>viande</span><br>yassa</h4>
                        <p>Salade, tomate, olive, oignon rouge, carotte,moutarde, citron.</p>
                    </figure>
                </div>
                
                
                <!-- PETITE FAIM -->
                <div class="flex list_bokit filtre_ingredient">
                    <figure class="petite_faim">
                        <div class="fond_noir">
                            <img src="../image/Obokit-food-truck_pastel.jpg" alt="">
                        </div>
                        <h4>Pastel</h4>
                        <p>Sauce chien, sauce cocktail, salade, tomate, oignon rouge, cheddar.</p>
                    </figure>
                    
                    <figure class="petite_faim">
                        <div class="fond_noir">
                            <img src="../image/Obokit-food-truck_accras.jpg" alt="">
                        </div>
                        <h4>accras de morue</h4>
                        <p>Salade, tomate, olive, oignon rouge, carotte,moutarde, citron.</p>
                    </figure>

                    <figure class="accompagenement">
                        <div class="fond_noir">
                            <img src="../image/poulet_b_b.jpg" alt="">
                        </div>
                        <h4><span>frite</span><br>pomme de terre</h4>
                        <p>Sauce chien, sauce cocktail, salade, tomate, oignon rouge, cheddar.</p>
                    </figure>

                    <figure class="accompagenement">
                        <div class="fond_noir">
                            <img src="../image/bokit_vegan_uber.JPG" alt="">
                        </div>
                        <h4><span>frite</span><br>patate douce</h4>
                        <p>Sauce blanche, salade, tomate, oignon rouge, avocat, parmesan.</p>
                    </figure>

                    <figure class="accompagenement">
                        <div class="fond_noir">
                            <img src="../image/poisson_morue.jpg" alt="">
                        </div>
                        <h4><span>alloco</span><br>banane plantain</h4>
                        <p>Sauce chien, sauce blanche, salade, tomate, oignon rouge, avocat.</p>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function() {

            // Variable pour garder une trace de l'état du lien "BOKIT"
            var bokitActive = false;

            // Fonction pour afficher uniquement les éléments requis dans la section5
            function afficherElementsSection5() {
                $('#list_menu_secondaire').find('.btnChoix').show();
                $('#list_bokit').show();
                $('#list_bowl').hide();
            }

            // Appel de la fonction pour afficher les éléments requis lors du chargement de la page
            afficherElementsSection5();

            // Gérer le clic sur le lien "BOWL"
            $('.bowl-link').click(function(e) {
                e.preventDefault();
                $('#list_menu_secondaire').find('#poisson,#poulet,#legume,#viande').show();
                $('#list_menu_secondaire').find('#crevette').hide();
                $('.list_bokit').hide();
                $('#list_bowl').show();
                // Mettre à jour l'état du lien "BOKIT"
                bokitActive = false;
            });

            // Gérer le clic sur le lien "BOKIT"
            $('.bokit-link').click(function(e) {
                e.preventDefault();
                $('#list_menu_secondaire').find('.btnChoix').show();
                $('.list_bokit').show();
                $('#list_bowl').hide();
                // Mettre à jour l'état du lien "BOKIT"
                bokitActive = true;
            });


            $('#filtre li a').click(function() {					// On clique sur un filtre
                    
                $('#filtre li').removeClass('active');				// Supprimer la classe "active" sur tous les liens du filtre
                $(this).parent().addClass('active');				// Ajouter la classe "active" sur le parent (li) du "a" cliqué
                
                var valeurFiltre = $(this).text().toLowerCase();	// On stocke dans une variable la valeur du lien cliqué, en minuscule
                
                $('.filtre_ingredient figure').hide();							// Cacher tous les projets
                
                if (valeurFiltre == 'tout') {						// On teste si le filtre appliqué est sur "tout"
                    $('.filtre_ingredient figure').show('slow');  				// Alors on montre tous les projets
                }
                else {
                    // alert('hello');
                    $('.filtre_ingredient figure').each(function() {			// Sinon c'est que l'on est dans une catégorie
                        if(!$(this).hasClass(valeurFiltre)) {  		// On vérifie le "li" n'a pas la classe du filtre appliqué
                            $(this).hide('slow');					// On cache les projets qui n'ont pas cette classe
                        } else {  
                            $(this).show('slow');  					// Sinon on les montre
                        }  
                    });
                }  

                return false;										// Bloque l'action initiale du lien
            });

        });


    </script>

</body>

</html>
