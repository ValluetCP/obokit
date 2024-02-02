<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <title>Obokit - Notre carte</title>
    <meta name="description" content="Une phrase d’environ 170 caractères">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="../menu_test/menu.css"> -->
    <link rel="stylesheet" href="lightbox.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
    <script type="text/javascript" src="./site.js"></script>
    <script type="text/javascript" src="./accordeon.js"></script>
</head>

<body>

    <div class="section5">

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

            <div class="carte_contenu">
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
                    <figure class="viande">
                        <div class="fond_noir">
                            <img src="./image/poulet_yassa.jpg" alt="">
                        </div>
                        <h4><span>viande</span><br>yassa</h4>
                        <p>Salade, tomate, olive, oignon rouge, carotte,moutarde, citron.</p>
                        <hr>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <script>

        

        $(document).ready(function() {

            $('#filtre li a').click(function() {					// On clique sur un filtre
                
                $('#filtre li').removeClass('active');				// Supprimer la classe "active" sur tous les liens du filtre
                $(this).parent().addClass('active');				// Ajouter la classe "active" sur le parent (li) du "a" cliqué
                
                var valeurFiltre = $(this).text().toLowerCase();	// On stocke dans une variable la valeur du lien cliqué, en minuscule
                
                $('#portfolio figure').hide();							// Cacher tous les projets
                
                if (valeurFiltre == 'tout') {						// On teste si le filtre appliqué est sur "tout"
                    $('#portfolio figure').show('slow');  				// Alors on montre tous les projets
                }
                else {
                    // alert('hello');
                    $('#portfolio figure').each(function() {			// Sinon c'est que l'on est dans une catégorie
                        if(!$(this).hasClass(valeurFiltre)) {  		// On vérifie le "li" n'a pas la classe du filtre appliqué
                            $(this).hide('slow');					// On cache les projets qui n'ont pas cette classe
                        } else {  
                            $(this).show('slow');  					// Sinon on les montre
                        }  
                    });
                }  

                return false;										// Bloque l'action initiale du lien
            });

            // $("#portfolio li a").lightBox();						// Effet lightbox sur les liens du portfolio


            
        });
    </script>
</body>

</html>