<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container_section">

    <!-- SECTION 1 -->
    <section class="section1">
        
    </section>

    <!-- SECTION 2 -->
    <section class="section2">

    </section>
    
    <!-- SECTION 3 -->
    <section class="section3">
        <h2>Nous vous<br><span>ACCUEILLONS</span></h2>
        <div class="ouverture">
            <h3>Jours D'ouvertures</h3>
            <p>lundi, mardi, jeudi, vendredi et samedi</p>
        </div>
        <div class="fermeture">
            <h3>Jours De Fermetures</h3>
            <p>mercredi et dimanche</p>
        </div>
    </section>
    
    <!-- SECTION 4 -->
    <section class="section4">
        <h2>Où nous<br><span>TROUVER ?</span></h2>
        <div class="nous_trouver">
            <div class="semaine">
                <div class="jour">LUNDI</div>
                <div class="heure">18h00-22h00</div>
                <div class="adresse">Place Léo-lagrange, 94800 VILLEJUIF</div>
                <div class="plusDetail"><img src="./asset/img/plus_detail.svg" alt=""></div>
            </div>
            <hr>
            <div class="semaine semaine_fond">
                <div class="jour">MARDI</div>
                <div class="heure">11h30-15h00<br><span>17h00-22h00</span></div>
                <div class="adresse">Place Condorcet, centre ville près du café Leffe,<br><span>92340 BOURG-LA-REINE</span></div>
                <div class="plusDetail"><img src="./asset/img/plus_detail.svg" alt=""></div>
            </div>
            <hr>
            <div class="semaine">
                <div class="jour">JEUDI</div>
                <div class="heure">11h30-15h00<br><span>17h00-22h00</span></div>
                <div class="adresse">Place Condorcet, centre ville près du café Leffe,<br><span>92340 BOURG-LA-REINE</span></div>
                <div class="plusDetail"><img src="./asset/img/plus_detail.svg" alt=""></div>
            </div>
            <hr>
            <div class="semaine semaine_fond">
                <div class="jour">VENDREDI</div>
                <div class="heure">11h30-22h00</div>
                <div class="adresse">Place Léo-lagrange, 94800 VILLEJUIF</div>
                <div class="plusDetail"><img src="./asset/img/plus_detail.svg" alt=""></div>
            </div>
            <hr>
            <div class="semaine">
                <div class="jour">SAMEDI</div>
                <div class="heure">11h30-15h00</div>
                <div class="adresse">Place Condorcet, centre ville près du café Leffe,<br><span>92340 BOURG-LA-REINE</span></div>
                <div class="plusDetail"><img src="./asset/img/plus_detail.svg" alt=""></div>
            </div>
        </div>
    </section>

    <!-- SECTION 5 -->
    <section  class="section5">

        <h2>Notre<br><span>Carte</span></h2>

        <div class="carte">
            <!-- CARTE - liste menu principale -->
            <div class="list_menu_principale flex">
                <a href="?carte=0">MENU</a>
                <a href="?carte=1">BOKIT</a>
                <a href="?carte=2">BOWL</a>
                <a href="?carte=3" class="active">PETITE FAIM & ACCOMPAGNEMENT</a>
                <a href="?carte=4">SAUCE</a>
                <a href="?carte=5">DESSERT</a>
                <a href="?carte=6">BOISSON</a>
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
                        <img src="./asset/img/poisson3.svg" alt="icone poisson">
                    </div>
                    <p class="icone_legende">poisson</p>
                </div>
                <div class="btnChoix" title="poulet">
                    <div class="icone icone_poulet">
                        <img src="./asset/img/poulet3.svg" alt="icone poulet">
                    </div>
                    <p class="icone_legende">poulet</p>
                </div>
                <div class="btnChoix" title="legume">
                    <div class="icone">
                        <img src="./asset/img/legume3.svg" alt="icone legume">
                    </div>
                    <p class="icone_legende">légume</p>
                </div>
                <div class="btnChoix" title="crevette">
                    <div class="icone icone_crevette">
                        <img src="./asset/img/crevette3.svg" alt="icone crevette">
                    </div>
                    <p class="icone_legende">crevette</p>
                </div>
                <div class="btnChoix" title="viande">
                    <div class="icone icone_viande">
                        <img src="./asset/img/viande3.svg" alt="icone viande">
                    </div>
                    <p class="icone_legende">viande</p>
                </div>
            </div>

            
        </div>

    </section>
</div>



<?php
include_once "./inc/footer.php";
?>