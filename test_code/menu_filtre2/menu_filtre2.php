<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <title>Obokit - Notre carte</title>
    <meta name="description" content="Une phrase d’environ 170 caractères">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <!-- NAV -->
    <nav>
        <p class="logo"><a href="">o'bokit</a></p>
        <div class="burger">
            <div class="trait1"></div>
            <div class="trait2"></div>
            <div class="trait3"></div>
        </div>
    </nav>

    <!-- HEADER -->
    <header>
        <div class="img_header">
            <!-- image en background -->
        </div>
    </header>

    <!-- SECTION 2 -  -->


    <!-- SECTION 3 - SON HISTOIRE -->
    <div class="section3">
        <div class="container_sect3">
            <div class="sect3_img">
                <!-- Attente de l'image -->
            </div>
            <div class="sect3_txt">
                <h2>Son<br><span>Histoire</span></h2>
                <Blockquote>
                    « J’ai toujours été bercé par les saveurs des plats
                    traditionnels d’Afrique de l’Ouest, préparés par ma mère. » <span>Atif SAADE</span>
                </Blockquote>
                <p>
                    Du plus lointain qu’il s’en rappelle, Atif SAADE a toujours été bercé par les saveurs des plats traditionnels d’Afrique de l’Ouest préparés par sa mère.
                    Après un CAP cuisine, il est rapidement rentré dans le monde du travail, par passion mais aussi afin de pouvoir subvenir aux besoins de sa famille. Sa formation en cuisine gastronomique, sa connaissance de la cuisine afro et son expérience dans la restauration antillaise, sont les facteurs clés qui lui permettent aujourd’hui de proposer des recettes mixant saveurs afro caribéennes et saveurs continentales.
                </p>
            </div>
        </div>
    </div>

    <!-- SECTION 4 - CONCEPT -->
    <div class="section4">
        <!-- TYPO géante -->
        <div class="concept">
            <img src="../image/sect4_concept.png" alt="Typographie géante concept">
        </div>
        <!-- texte & image -->
        <div class="container_sect4">
            <p class="sect4_txt">
                Tout droit sorti de Guadeloupe, le bokit est un pain chaud frit. Granit comme un sandwich, O’bokit vous propose des recettes revisitées mêlant les plats traditionnels d’Afrique de l’Ouest à celles des caraïbes. Découvrez des saveurs réconfortantes voire dépaysantes pour certains, le tout dans une ambiance chaleureuse et conviviale à l’image de ses communautés.
            </p>
            <div class="sect4_img_camion">
                <img src="../image/bokit-jambon-fromage-et-camion2.jpg" alt="">
            </div>
        </div>
    </div>

    <!-- SECTION 5 - CARTE-->
    <div class="section5">
        <div class="container_sect5">
            <h2>Notre<br><span>Carte</span></h2>

            <div class="carte">

                <!-- CARTE - liste menu principale -->
                <div class="list_menu_principale flex">
                    <a href="#" class="menu-link">MENU</a>
                    <a href="#" class="bokit-link" id="bokit-link">BOKIT</a>
                    <a href="#" class="bowl-link">BOWL</a>
                    <a href="#" class="petiteFaim-link" class="activeMenu1">PETITE FAIM</a>
                    <a href="#" class="supplement-link">supplément</a>
                    <a href="#" class="dessert-link">DESSERT</a>
                    <a href="#" class="boisson-link">BOISSON</a>
                </div>

                <div class="carte_contenu">
                    <div id="list_menu_secondaire">

                        <ul class="filtre_choix flex" id="filtre">
                            <li class="active" id="tout">
                                <a href="#" class="btnChoix">Tout</a>
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
                            <!-- <li>
                                <a href="#" class="btnChoix" id="crevette" title="crevette">Crevette</a>
                            </li> -->
                            <li>
                                <a href="#" class="btnChoix" id="viande" title="viande">Viande</a>
                            </li>
                            <li>
                                <a href="#" class="btnChoix" id="accompagenement" title="accompagenement">accompagenement</a>
                            </li>
                        </ul>
                    </div>


                    <!-- MENU -->
                    <div class="filtre_ingredient" id="list_menu">
                        <figure class="menu_bokit">
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4>Menu bokit</h4>
                            <p>Un bokit au choix, un accompagnement au choix et une boisson (+1€ boisson 50cl) </p>
                        </figure>
                    </div>

                    <!-- BOWL -->
                    <div class="filtre_ingredient" id="list_bowl">
                        <figure class="legume">
                            <div class="fond_noir">
                                <img src="../image/bowl_vegan_uber.JPG" alt="">
                            </div>
                            <h4>Végétarien</h4>
                            <p>*Sauce chien, mélange de légumes marinés, banane plantain, crudités et avocat.</p>
                        </figure>

                        <figure class="poulet">
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4>poulet yassa</h4>
                            <p>*Sauce chien, banane plantain, crudités et avocat.</p>
                        </figure>

                        <figure class="poisson">
                            <div class="fond_noir">
                                <img src="../image/bowl_morue_uber.JPG" alt="">
                            </div>
                            <h4>MORUE</h4>
                            <p>*Sauce chien, banane plantain, crudités et avocat.</p>
                        </figure>

                        <figure class="viande">
                            <div class="fond_noir">
                                <img src="../image/bowl_complet_uber.JPG" alt="">
                            </div>
                            <h4>Complet</h4>
                            <p>*Sauce chien, steak, oeuf, bacon de bœuf, banane plantain, crudités et avocat.</p>
                        </figure>


                        <!-- <figure class="poulet fig1">
                            <div class="fond_noir">
                                <img src="../image/bowl_complet_uber.JPG" alt="">
                            </div>
                            <h4>poulet boucané</h4>
                            <p>Sauce chien, banane plantain, juliennes de carottes et choux, tomate, oignon rouge, avocat.</p>
                        </figure>-->
                    </div>
                    <!-- Astérisque -->
                    <div class="container_asterisque">
                        <p class="asterisque  note_bowl">*BASE DE RIZ OU SALADE</p>
                    </div>


                    <!-- BOKIT -->
                    <div class="flex filtre_ingredient" id="list_bokit">

                        <figure class="legume">
                            <div class="fond_noir">
                                <img src="../image/bokit_vegan_uber.JPG" alt="">
                            </div>
                            <h4><span>légumes marinés</span><br>Végétarien</h4>
                            <p>Sauce chien, sauce blanche, mélange de légumes marinés, salade, tomate, oignon rouge.</p>
                        </figure>

                        <figure class="poulet">
                            <div class="fond_noir">
                                <img src="../image/bokit_jambon_uber.JPG" alt="">
                            </div>
                            <h4><span>jambon de dinde & fromage</span><br>classique</h4>
                            <p>Sauce chien, sauce boucané, salade, tomate, oignon rouge, duo de fromage rapé.</p>
                        </figure>

                        <figure class="poisson">
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4><span>MORUE</span><br>CHIQUETAILLE</h4>
                            <p>Sauce chien, sauce blanche, salade, tomate, oignon rouge, avocat.</p>
                        </figure>

                        <figure class="poulet">
                            <div class="fond_noir">
                                <img src="../image/bokit_poulet_uber.JPG" alt="">
                            </div>
                            <h4><span>poulet</span><br>boucané</h4>
                            <p>Sauce chien, sauce boucané, salade, tomate, oignon rouge, cheddar.</p>
                        </figure>

                        <figure class="poulet">
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4><span>poulet</span><br>yassa</h4>
                            <p>Salade, tomate, olives, oignon rouge, carotte, moutarde, citron.</p>
                        </figure>

                        <figure class="viande">
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4><span>steak & bacon de bœuf</span><br>complet</h4>
                            <p>Sauce poivre, salade, tomates, oignons, œuf et Cheddar.</p>
                        </figure>

                        <!-- 
                        <figure class="poulet">
                            <div class="fond_noir">
                                <img src="../image/bokit_banane_uber.JPG" alt="">
                            </div>
                            <h4><span>poulet</span><br>boucané banane plantain</h4>
                            <p>Sauce chien, sauce cocktail, salade, tomate, oignon rouge, cheddar.</p>
                        </figure>

                        <figure class="poulet">
                            <div class="fond_noir">
                                <img src="../image/bokit_pouletMarine_uber.JPG" alt="">
                            </div>
                            <h4><span>poulet</span><br>Marinade maison</h4>
                            <p>Sauce chien, sauce blanche, champignon, salade, tomate, oignon rouge, cheddar.</p>
                        </figure>

                        <figure class="poisson">
                            <div class="fond_noir">
                                <img src="../image/bokit_vegan_uber.JPG" alt="">
                            </div>
                            <h4><span>SAUMON</span><br>fumée</h4>
                            <p>Sauce blanche, salade, tomate, oignon rouge, avocat, parmesan.</p>
                        </figure> -->
                    </div>


                    <!-- PETITE FAIM -->
                    <div class="grid filtre_ingredient" id="list_petite_faim">

                        <figure class="viande">
                            <div class="fond_noir">
                                <img src="../image/Obokit-food-truck_pastel.jpg" alt="">
                            </div>
                            <h4><span>Pastel</span><br>bœuf fromage</h4>
                            <p>viande hachée, nokoss, persil, oignons, ail, épice grill et cheddar. Accompagné d'une sauce.</p>
                        </figure>

                        <figure class="poisson">
                            <div class="fond_noir">
                                <img src="../image/Obokit-food-truck_accras.jpg" alt="">
                            </div>
                            <h4><span>accras</span><br>morue </h4>
                            <p>Accompagné d'une sauce.</p>
                        </figure>

                        <figure class="accompagenement">
                            <div class="fond_noir">
                                <img src="../image/frite_pommeDeTerre_uber.JPG" alt="">
                            </div>
                            <h4><span>frite</span><br>pomme de terre</h4>
                            <p>Servi avec une sauce de votre choix.</p>
                        </figure>

                        <figure class="accompagenement">
                            <div class="fond_noir">
                                <img src="../image/frite_patateDouce_uber.JPG" alt="">
                            </div>
                            <h4><span>frite</span><br>patate douce</h4>
                            <p>Servi avec une sauce de votre choix.</p>
                        </figure>

                        <figure class="accompagenement">
                            <div class="fond_noir">
                                <img src="../image/alloco_uber.JPG" alt="">
                            </div>
                            <h4><span>alloco</span><br>banane plantain</h4>
                            <p>Servi avec une sauce de votre choix.</p>
                        </figure>

                        <figure class="legume">
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4><span>accras</span><br>Végétarien</h4>
                            <p>Accompagné d'une sauce.</p>
                        </figure>
                        <!-- 
                        <figure class="poulet">
                            <div class="fond_noir">
                                <img src="../image/Obokit-food-truck_pastel.jpg" alt="">
                            </div>
                            <h4><span>Pastel</span><br>poulet curry</h4>
                            <p>filet de blanc de poulet, curry, nokoss, oignons, persil et épices spéciales pour poulet.</p>
                        </figure>

                        <figure class="crevette">
                            <div class="fond_noir">
                                <img src="../image/Obokit-food-truck_pastel.jpg" alt="">
                            </div>
                            <h4><span>Pastel</span><br>crevettes </h4>
                            <p>crevette grise, nokoss, persil, oignons, et épices spéciales pour fruits de mer.</p>
                        </figure>

                        <figure class="poisson">
                            <div class="fond_noir">
                                <img src="../image/Obokit-food-truck_pastel.jpg" alt="">
                            </div>
                            <h4><span>Pastel</span><br>saumon </h4>
                            <p>saumon fumé, ciboulette, fromage, ail et fines herbes, parfait pour une collaboration raffinée.</p>
                        </figure> -->
                    </div>

                    <!-- SUPPLEMENT -->
                    <div class="filtre_ingredient" id="list_supplement">
                        <figure class="viande">
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4>Protéine</h4>
                            <p>Choix : oeuf, bacon de boeuf, viande</p>
                        </figure>
                        <figure class="legume">
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4>Vegan</h4>
                            <p>Choix : avocat, banane plantain, fromage</p>
                        </figure>
                        <figure class="accompagenement">
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4>sauce</h4>
                            <p>Choix : sauce créoline, sauce tomate</p>
                        </figure>
                    </div>

                    <!-- DESSERT -->
                    <div class="filtre_ingredient" id="list_dessert">
                        <figure>
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4>Smoothie Baobab</h4>
                            <p>Buvable à la texture crémeuse à base de fruits. Dessert artisanal.</p>
                        </figure>
                        <figure>
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4>Degué (thiakry)</h4>
                            <p>à base de couscous de mil et de yaourt. Dessert artisanal.</p>
                        </figure>
                        <figure>
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4>Montblanc</h4>
                            <p>Dessert artisanal</p>
                        </figure>
                        <figure>
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4>Salade de fruits</h4>
                            <p>composé d'un mélange de fruits frais. Dessert artisanal.</p>
                        </figure>
                        <figure>
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4>Lassi mangue</h4>
                            <p>Dessert artisanal à base de yaourt.</p>
                        </figure>
                    </div>

                    <!-- BOISSON -->
                    <div class="filtre_ingredient" id="list_boisson">
                        <figure>
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4>Bissap</h4>
                            <p>Boisson non gazeuse, fabriquée artisanalement</p>
                        </figure>
                        <figure>
                            <div class="fond_noir">
                                <!-- Attente de l'image -->
                            </div>
                            <h4>Gingembre</h4>
                            <p>Boisson non gazeuse, fabriquée artisanalement</p>
                        </figure>
                    </div>
                    <!-- Astérisque -->
                    <div class="container_asterisque">
                        <p class="asterisque note_boisson"><span>*Boisson non gazeuse :</span> Eau plate, jus de mangue, jus de goyave.</p>
                        <p class="asterisque note_boisson"><span>*Boisson gazeuse :</span> Eau gazeuse, ordinaire, kola champion, coca zéro, coca.</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <p class="menuPdf"><a href="http://" target="_blank" rel="noopener noreferrer">AFFICHER TOUTE LA CARTE</a></p>

    <!-- SECTION 6 -->
    <div class="section6">
        <!-- <div class="plante">
            <img src="../image/sect6_plante2.jpg" alt="image végétation">
        </div> -->
        <div class="localisation">
            <img src="../image/sect6_localisation.png" alt="titre localisation">
        </div>


        <!-- ZONE IMAGE -->
        <div class="img_bokit">
            <img src="../image/sect6_bokit.jpg" alt="image bokit">
        </div>

        <!-- ZONE TEXTE -->
        <div class="container_sect6">
            <div class="sect6_txt">
                <h2>suivez nos<br><span>horaires & déplacements</span></h2>

                <!-- OUVERTURE -->
                <h3>Jours d’ouvertures</h3>

                <!-- VILLEJUIF -->
                <h4>villejuif // </h4>
                <p class="adresse">
                    adresse : Place Léo-lagrange, <br class="code_postal">94800 Villejuif
                </p>
                <div class="horaire">
                    <div class="jour">
                        <p>lundi</p>
                        <p>Vendredi</p>
                    </div>
                    <div class="heure">
                        <p>18h00 - 22h00</p>
                        <p>11h30 - 22h00</p>
                    </div>
                </div>
                <!-- BOURG-LA-REINE -->
                <h4>bourg-la-reine // </h4>
                <p class="adresse">
                    adresse : Place Condorcet, centre ville près <br class="a_la_ligne">du café Leffe, <br class="code_postal">92340 Bourg-la-reine
                </p>
                <div class="horaire">
                    <div class="jour">
                        <p>mardi</p>
                        <p>jeudi</p>
                        <p>samedi</p>
                    </div>
                    <div class="heure">
                        <p>11h30 - 15h00 | 17h00 - 22h00</p>
                        <p>11h30 - 15h00 | 17h00 - 22h00</p>
                        <p>11h00 - 22h00</p>
                    </div>
                </div>

                <!-- FERMETURE -->
                <h3>Jours de fermetures</h3>
                <div class="jour">
                    <p>mercredi et dimanche</p>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION BANDE -->
    <section class="container_bande">
        <div class="list">
            <div class="item">
                <span class="item-txt">BOKIT</span>
                <span class="item-d">
                    <p class="item-dot dot-t"></p>
                </span>
                <span class="item-txt">PARTAGE</span>
                <span class="item-d">
                    <p class="item-dot dot-b"></p>
                </span>
                <span class="item-txt">afro-caribéen</span>
                <span class="item-d">
                    <p class="item-dot dot-g"></p>
                </span>
                <span class="item-txt">convivialité</span>
                <span class="item-d">
                    <p class="item-dot dot-y"></p>
                </span>
                <span class="item-txt">saveurs exotiques</span>
                <span class="item-d">
                    <p class="item-dot dot-r"></p>
                </span>
            </div>
        </div>
        <div class="list">
            <div class="item">
                <span class="item-txt">BOKIT</span>
                <span class="item-d">
                    <p class="item-dot dot-t"></p>
                </span>
                <span class="item-txt">PARTAGE</span>
                <span class="item-d">
                    <p class="item-dot dot-b"></p>
                </span>
                <span class="item-txt">afro-caribéen</span>
                <span class="item-d">
                    <p class="item-dot dot-g"></p>
                </span>
                <span class="item-txt">convivialité</span>
                <span class="item-d">
                    <p class="item-dot dot-y"></p>
                </span>
                <span class="item-txt">saveurs exotiques</span>
                <span class="item-d">
                    <p class="item-dot dot-r"></p>
                </span>
            </div>
        </div>
        <!-- <div class="list">
            <div class="item">
                <span class="item-txt">WEB</span>
                <span class="item-d">
                    <p class="item-dot dot-t"></p>
                </span>
                <span class="item-txt">UX</span>
                <span class="item-d">
                    <p class="item-dot dot-b"></p>
                </span>
                <span class="item-txt">VISUAL</span>
                <span class="item-d">
                    <p class="item-dot dot-g"></p>
                </span>
                <span class="item-txt">ILLUSTRATION</span>
                <span class="item-d">
                    <p class="item-dot dot-y"></p>
                </span>
                <span class="item-txt">& MORE</span>
                <span class="item-d">
                    <p class="item-dot dot-r"></p>
                </span>
            </div>
        </div> -->
    </section>

    <!-- SECTION 7 -->
    <div class="section7">
        <div class="sect7_txt">
            <h2>découvrez nos<br><span>prestations & services</span></h2>
            <p>
                Votre food truck est prêt à régaler vos papilles lors de tous vos événements. Qu’il s’agisse d’un mariage, d’une fête d’anniversaire ou d’une soirée d’entreprise, privatisez O’bokit et partageons des moments inoubliables avec une touche d’exotisme grâce à nos délicieuses saveurs.
            </p>
            <p>
                Notre incroyable équipe mettra, comme à ses habitudes tout son coeur et son talent à votre disposition pour vous offrir un service et une expérience digne de ce nom.
            </p>
        </div>
        <div class="sect7_img">
            <img src="../image/sect6_bokit.jpg" alt="bokit">
        </div>
    </div>

    <!-- SECTION 8 - SERVICES-->
    <div class="section8">
        <div class="container_sect8">
            <div class="service">
                <div class="service_img"></div>
                <div class="service_txt">livraison</div>
            </div>
            <div class="service">
                <div class="service_img"></div>
                <div class="service_txt">à emporter</div>
            </div>
            <div class="service">
                <div class="service_img"></div>
                <div class="service_txt">événements</div>
            </div>
            <div class="service">
                <div class="service_img"></div>
                <div class="service_txt">réception</div>
            </div>
        </div>
    </div>

    <!-- SECTION 9 - CONTACT -->
    <div class="section9">
        <div class="container_sect9">
            <div class="contact">
                <div class="contact_img">
                    <img src="../image/sect9_contact.png" alt="">
                </div>
                <div class="contact_txt">
                    <div class="sect9_email">obokitsa@gmail.com</div>
                    <div class="sect9_phone">+33 699128474</div>
                </div>
            </div>
            <form action="mailto:obokitsa@gmail.com" method="get" enctype="text/plain">
                <div id="name_input">
                    <input type="text" placeholder="prénom" name="prenom" class="champ_name input_general">
                    <input type="text" placeholder="nom" name="nom" class="champ_name input_general">
                </div>

                <div>
                    <input type="email" name="email" id="email" placeholder="votre adresse mail" class="champ_basic input_general">
                </div>

                <div>
                    <input type="text" placeholder="objet" class="champ_basic input_general">
                </div>

                <div>
                    <input type="tel" name="tel" id="tel" placeholder="téléphone" class="champ_basic input_general">
                </div>

                <div>
                    <textarea name="comments" placeholder="votre message"></textarea>
                </div>

                <div class="bouton_form">
                    <input type="submit" name="submit" value="envoyer" id="envoyer" />
                    <input type="reset" name="reset" value="réinitialiser" id="reinitialiser" />
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL - MENTION LEGALES -->
    <!-- <div id="modal">
        <div class="modal-content">
            <a class="modal-close" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
            <h2 class="modalTitre">mentions légales</h2>
            <p>En cliquant sur le bouton "quitter cette page", ces informations ne seront pas enregistrées et vos modifications ne seront pas prises en comptes.</p>
        </div>
    </div> -->

    <!-- FOOTER -->
    <footer>
        <div class="container_footer">
            <p><a href="#modalMentionsLegales">mentions légales</a></p>
            <div class="reseaux">
                <div class="reseaux_icone" title="facebook - obokitfoodtruck">
                    <a href="https://www.facebook.com/obokitfoodtruck/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <div class="reseaux_icone" title="instagram - obokitfoodtruck">
                    <a href="https://www.instagram.com/obokitfoodtruck/"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="reseaux_icone" title="snapchat - obokitfoodtruck">
                    <a href="https://www.snapchat.com/obokitfoodtruck/"><i class="fa-brands fa-snapchat"></i></a>
                    
                </div>
            </div>
        </div>
    </footer>


    <script>
        $(document).ready(function() {

            // ------ LISTE PRINCIPALE ------ //

            // Variable pour garder une trace de l'état du lien "BOKIT"
            var bokitActive = false;


            // Fonction pour afficher uniquement les éléments requis dans la section5
            function afficherElementsSection5() {
                $('#list_menu_secondaire').find('.btnChoix').show();
                $('#list_bokit').show();
                $('#list_menu').hide();
                $('#list_bowl').hide();
                $('#list_petite_faim').hide();
                $('#list_supplement').hide();
                $('#list_dessert').hide();
                $('#list_boisson').hide();
                $('#list_menu_secondaire').find('#accompagenement').hide();
                $('.bokit-link').addClass('activeLink');
                $('#filtre #tout').find('a').addClass('linkActive');
                $('.container_asterisque').find('.note_bowl').hide();
                $('.container_asterisque').find('.note_boisson').hide();

            }

            // Appel de la fonction pour afficher les éléments requis lors du chargement de la page
            afficherElementsSection5();

            // Gérer le clic sur le lien "MENU"
            $('.menu-link').click(function(e) {
                e.preventDefault();
                $('#list_menu_secondaire').find('#crevette,#poisson,#poulet,#legume,#viande').hide();
                $('#list_menu').show();
                $('#list_bowl').hide();
                $('#list_bokit').hide();
                $('#list_petite_faim').hide();
                $('#list_supplement').hide();
                $('#list_boisson').hide();
                $('#list_dessert').hide();
                $('.container_asterisque').find('.note_bowl').hide();
                $('.container_asterisque').find('.note_boisson').hide();

                // Réinitialiser l'affichage à 'tout'
                $('#filtre li').removeClass('active'); // Supprimer la classe "active" sur tous les liens du filtre
                $('#filtre #tout').addClass('active'); // Ajouter la classe "active" sur le parent (li) du "a" cliqué 
                $('#list_menu').find('figure').show(); // Afficher toute la liste des menus

                // Retirer la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre li').find('a').removeClass('linkActive');
                // Ajouter la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre #tout').find('a').addClass('linkActive');

                // Supprimer la classe "activeLink" sur tous les liens du filtre
                $('.list_menu_principale a').removeClass('activeLink');
                // Ajouter la classe pour spécifier la couleur du texte
                $(this).addClass('activeLink');
            });

            // Gérer le clic sur le lien "BOWL"
            $('.bowl-link').click(function(e) {
                e.preventDefault();
                $('#list_menu_secondaire').find('#poisson,#poulet,#legume,#viande').show();
                $('#list_menu_secondaire').find('#crevette,#accompagenement').hide();
                $('#list_bowl').show();
                $('#list_menu').hide();
                $('#list_bokit').hide();
                $('#list_petite_faim').hide();
                $('#list_supplement').hide();
                $('#list_boisson').hide();
                $('#list_dessert').hide();
                $('.container_asterisque').find('.note_bowl').show();
                $('.container_asterisque').find('.note_boisson').hide();

                // Réinitialiser l'affichage à 'tout'
                $('#filtre li').removeClass('active'); // Supprimer la classe "active" sur tous les liens du filtre
                $('#filtre #tout').addClass('active'); // Ajouter la classe "active" sur le parent (li) du "a" cliqué
                $('#list_bowl').find('figure').show(); // Afficher toute la liste des bowls

                // Retirer la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre li').find('a').removeClass('linkActive');
                // Ajouter la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre #tout').find('a').addClass('linkActive');

                // Supprimer la classe "activeLink" sur tous les liens du filtre
                $('.list_menu_principale a').removeClass('activeLink');
                // Ajouter la classe pour spécifier la couleur du texte
                $(this).addClass('activeLink');
            });


            // Gérer le clic sur le lien "BOKIT"
            $('.bokit-link').click(function(e) {
                e.preventDefault();
                $('#list_menu_secondaire').find('.btnChoix').show();
                $('#list_menu_secondaire').find('#crevette,#accompagenement').hide();
                $('#list_bokit').show();
                $('#list_menu').hide();
                $('#list_bowl').hide();
                $('#list_petite_faim').hide();
                $('#list_supplement').hide();
                $('#list_boisson').hide();
                $('#list_dessert').hide();
                $('.container_asterisque').find('.note_bowl').hide();
                $('.container_asterisque').find('.note_boisson').hide();

                // Réinitialiser l'affichage à 'tout'
                $('#filtre li').removeClass('active'); // Supprimer la classe "active" sur tous les liens du filtre
                $('#filtre #tout').addClass('active'); // Ajouter la classe "active" sur le parent (li) du "a" cliqué
                $('#list_bokit').find('figure').show(); // Afficher toute la liste des bokits

                // Retirer la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre li').find('a').removeClass('linkActive');
                // Ajouter la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre #tout').find('a').addClass('linkActive');

                // Supprimer la classe "activeLink" sur tous les liens du filtre
                $('.list_menu_principale a').removeClass('activeLink');
                // Ajouter la classe pour spécifier la couleur du texte
                $(this).addClass('activeLink');
            });


            // Gérer le clic sur le lien "PETITE FAIM"
            $('.petiteFaim-link').click(function(e) {
                e.preventDefault();
                $('#list_menu_secondaire').find('#poisson,#viande,#accompagenement,#legume').show();
                $('#list_menu_secondaire').find('#crevette,#poulet').hide();
                $('#list_petite_faim').show();
                $('#list_menu').hide();
                $('#list_bokit').hide();
                $('#list_bowl').hide();
                $('#list_supplement').hide();
                $('#list_boisson').hide();
                $('#list_dessert').hide();
                $('.container_asterisque').find('.note_bowl').hide();
                $('.container_asterisque').find('.note_boisson').hide();

                // Réinitialiser l'affichage à 'tout'

                // Ajouter la classe "active" sur le parent (li) du "a" cliqué
                $('#filtre li').removeClass('active'); // Supprimer la classe "active" sur tous les liens du filtre
                $('#filtre #tout').addClass('active');
                // Afficher toute la liste "petite faim"
                $('#list_petite_faim').find('figure').show();

                // Retirer la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre li').find('a').removeClass('linkActive');
                // Ajouter la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre #tout').find('a').addClass('linkActive');

                // Supprimer la classe "activeLink" sur tous les liens du filtre
                $('.list_menu_principale a').removeClass('activeLink');
                // Ajouter la classe pour spécifier la couleur du texte
                $(this).addClass('activeLink');
            });

            // Gérer le clic sur le lien "SUPPLEMENT"
            $('.supplement-link').click(function(e) {
                e.preventDefault();
                $('#list_menu_secondaire').find('#viande,#accompagenement,#legume').show();
                $('#list_menu_secondaire').find('#crevette,#poulet,#poisson').hide();
                $('#list_supplement').show();
                $('#list_petite_faim').hide();
                $('#list_menu').hide();
                $('#list_bokit').hide();
                $('#list_bowl').hide();
                $('#list_boisson').hide();
                $('#list_dessert').hide();
                $('.container_asterisque').find('.note_bowl').hide();
                $('.container_asterisque').find('.note_boisson').hide();

                // Réinitialiser l'affichage à 'tout'

                // Ajouter la classe "active" sur le parent (li) du "a" cliqué
                $('#filtre li').removeClass('active'); // Supprimer la classe "active" sur tous les liens du filtre
                $('#filtre #tout').addClass('active');
                // Afficher toute la liste "supplement"
                $('#list_supplement').find('figure').show();

                // Retirer la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre li').find('a').removeClass('linkActive');
                // Ajouter la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre #tout').find('a').addClass('linkActive');

                // Supprimer la classe "activeLink" sur tous les liens du filtre
                $('.list_menu_principale a').removeClass('activeLink');
                // Ajouter la classe pour spécifier la couleur du texte
                $(this).addClass('activeLink');
            });

            // Gérer le clic sur le lien "DESSERT"
            $('.dessert-link').click(function(e) {
                e.preventDefault();
                $('#list_menu_secondaire').find('#crevette,#poulet,#poisson,#viande,#accompagenement,#legume').hide();
                $('#list_dessert').show();
                $('#list_boisson').hide();
                $('#list_supplement').hide();
                $('#list_petite_faim').hide();
                $('#list_menu').hide();
                $('#list_bokit').hide();
                $('#list_bowl').hide();
                $('.container_asterisque').find('.note_bowl').hide();
                $('.container_asterisque').find('.note_boisson').hide();

                // Réinitialiser l'affichage à 'tout'

                // Ajouter la classe "active" sur le parent (li) du "a" cliqué
                $('#filtre li').removeClass('active'); // Supprimer la classe "active" sur tous les liens du filtre
                $('#filtre #tout').addClass('active');
                // Afficher toute la liste "dessert"
                $('#list_dessert').find('figure').show();

                // Retirer la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre li').find('a').removeClass('linkActive');
                // Ajouter la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre #tout').find('a').addClass('linkActive');

                // Supprimer la classe "activeLink" sur tous les liens du filtre
                $('.list_menu_principale a').removeClass('activeLink');
                // Ajouter la classe pour spécifier la couleur du texte
                $(this).addClass('activeLink');
            });

            // Gérer le clic sur le lien "BOISSON"
            $('.boisson-link').click(function(e) {
                e.preventDefault();
                $('#list_menu_secondaire').find('#crevette,#poulet,#poisson,#viande,#accompagenement,#legume').hide();
                $('#list_boisson').show();
                $('#list_dessert').hide();
                $('#list_supplement').hide();
                $('#list_petite_faim').hide();
                $('#list_menu').hide();
                $('#list_bokit').hide();
                $('#list_bowl').hide();
                $('.container_asterisque').find('.note_bowl').hide();
                $('.container_asterisque').find('.note_boisson').show();

                // Réinitialiser l'affichage à 'tout'

                // Ajouter la classe "active" sur le parent (li) du "a" cliqué
                $('#filtre li').removeClass('active'); // Supprimer la classe "active" sur tous les liens du filtre
                $('#filtre #tout').addClass('active');
                // Afficher toute la liste "boisson"
                $('#list_boisson').find('figure').show();

                // Retirer la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre li').find('a').removeClass('linkActive');
                // Ajouter la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre #tout').find('a').addClass('linkActive');

                // Supprimer la classe "activeLink" sur tous les liens du filtre
                $('.list_menu_principale a').removeClass('activeLink');
                // Ajouter la classe pour spécifier la couleur du texte
                $(this).addClass('activeLink');
            });





            // ------ LISTE SECONDAIRE ------ //

            $('#filtre li a').click(function() { // On clique sur un filtre

                $('#filtre li').removeClass('active'); // Supprimer la classe "active" sur tous les liens du filtre
                $(this).parent().addClass('active'); // Ajouter la classe "active" sur le parent (li) du "a" cliqué

                // Ajouter la classe "linkActive" à l'élément <a> si son parent <li> a la classe "active"
                $('#filtre li').find('a').removeClass('linkActive');
                $(this).addClass('linkActive');

                var valeurFiltre = $(this).text().toLowerCase(); // On stocke dans une variable la valeur du lien cliqué, en minuscule

                $('.filtre_ingredient figure').hide(); // Cacher tous les projets


                $('figure').addClass('hide'); // Ajoutez la classe hide pour masquer avec transition
                setTimeout(function() {
                    $('figure').removeClass('hide'); // Supprimez la classe hide après que la transition soit terminée
                }, 500); // Attendre 500ms pour que la transition se termine


                if (valeurFiltre == 'tout') { // On teste si le filtre appliqué est sur "tout"				
                    $('.filtre_ingredient figure').show('slow'); // Alors on montre tous les projets


                } else {
                    // alert('hello');
                    $('.filtre_ingredient figure').each(function() { // Sinon c'est que l'on est dans une catégorie
                        if (!$(this).hasClass(valeurFiltre)) { // On vérifie le "li" n'a pas la classe du filtre appliqué
                            $(this).hide('slow'); // On cache les projets qui n'ont pas cette classe
                        } else {
                            $(this).show('slow'); // Sinon on les montre
                        }
                    });
                }

                return false; // Bloque l'action initiale du lien
            });

        });
    </script>

</body>

</html>