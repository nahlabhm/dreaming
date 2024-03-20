<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dreaming</title>
    <link rel="stylesheet" href="./style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!----------------->
    <header class="header">
        <a href="#" class="header__logo"><img src="./vendor/images/logo.png" alt=""></a>
        <div class="header__btn">
            <i id="open" class='header__btn-open bx bx-menu' ></i>
            <i id="close" class='header__btn-close bx bx-x hide' style="display: none;"></i>
        </div>     
        <div id="menu" class="header__menu slide">
            <a href="#" class="header__link active">annoncer</a>
            <a href="#" class="header__link">planifier un voyage</a>
            <a href="#" class="header__link">mes voyages</a>
            <a href="#" class="header__link">connection</a>
        </div>  
        <div class="summary">
            <button class="visually-hidden">Aide</button>
            <button class="visually-hidden">Nous joindre</button>
            <button class="visually-hidden">eng</button>
          </div>
    </header>
    <main class="main">
        <!------------------->
        
        <section class="filter-section" id="recherche">
            <form class="search-form">
                <div  class="search__container">
                    <input type="text" placeholder="Essayer Montréal">
                    <select id="style-select">
                        <option value="">Style</option>
                        <option value="classique">Classique</option>
                        <option value="moderne">Moderne</option>
                        <option value="rustique">Rustique</option>
                        <option value="contemporain">Contemporain</option>
                    </select>
                    <select id="language-select">
                        <option value="">Langue</option>
                        <option value="fr">Français</option>
                        <option value="en">Anglais</option>
                        <option value="es">Espagnol</option>
                        <option value="de">Allemand</option>
                        <option value="it">Italien</option>
                    </select>
                    <div class="input-wrapper">
                        <input type="text"  
                        placeholder="Arrivée -> départ" />    
                        <i class='bx bx-calendar' style='color:#434343' ></i>
                    </div>
                    <button type="submit">Rechercher</button>
                </div>
            </form>
            <a href="#" class="filter-link">Plus de filtres <box-icon name='plus' color='#434343' ></box-icon></a>
        </section>
        
        <!------------------>
        <section class="full-width-section">
            <div class="image-home">
                <img src="./vendor/images/home-tab2-hero-1367x520-prog.jpg" alt="Your Image" class="image-home__img">
                <div class="container__home">
                    <p>DÉCOUVRIR LE MONDE PAR LES VOYAGES!</p>
                    <button class="button-img">Inscrivez-vous!</button>
                </div>
            </div>
        </section>
        <!--------------->
        <section class="services-section">
            <div class="right__container">
                <div class="right__img">
                    <img src="./vendor/images/joy.jpg" alt="Image">
                </div>
                <div class="container__content">
                    <div class="feature">
                        <div class="connect">
                        <div class="icon--container" style="background-color: #524B8E;">
                            <i class='bx bx-dollar' style='color:#ffffff'  ></i>

                        </div>
                        <h3 style="color: #524B8E;">GAGNEZ UN<br> REVENU ADDITIONNEL</h3>
                    </div>
                        <div class="text__container">
                            <p>Derrière elle se cachent ses gens. Ceux qui contribuent à la rendre si unique et qui lui donnent son caractère. Rendez-la plus humaine, plus chaleureuse et accueillante pour ceux qui la visitent en leur permettant une immersion authentique avec les gens qui l'habitent!</p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="connect">

                        <div class="icon--container" style="background-color: #F06A4E;">
                            <i class='bx bx-smile' style='color:#ffffff' ></i> 
                        </div>
                     <h3 style="color: #F06A4E;">FAITES DU VOYAGE <br>UNE EXPÉRIENCE</h3>
                      </div>
                        <div class="text__container">
                            <p>Elle est LA plus belle ! Vous la connaissez comme personne. Sous tous ses angles et toutes ses coutures. Quiconque la visitant devrait la voir comme vous la voyez : partagez-en Avotre amour inconditionnel! Forgez les souvenirs de celui qui la visite à travers vos repères, vos coups de cœur et vos anecdotes!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!----------------------->
        <section class="app-section">
            <div class="container-left">
                <div class="content-container">
                    <div class="feature">
                        <div class="connect">

                        <div class="icon-container" style="background-color: #08BDA6;">
                            <i class='bx bx-building-house' style='color:#ffffff'  ></i>
                                                </div>
                        <h1 style="color: #08BDA6;">Partagez<br> votre ville</h1>
                        </div>
                        <div class="text-container">
                            <p>Elle est LA plus belle ! Vous la connaissez comme personne. Sous tous ses angles et toutes ses coutures. Quiconque la visitant devrait la voir comme vous la voyez : partagez-en Avotre amour inconditionnel! Forgez les souvenirs de celui qui la visite à travers vos repères, vos coups de cœur et vos anecdotes!</p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="connect">
                        <div class="icon-container" style="background-color: #FFD800;">
                            <i class='bx bx-home-heart' style='color:#ffffff'  ></i>
                                                </div>
                        <h1 style="color: #FFD800;">Humanisez<br> votre ville</h1>
                        </div>
                        <div class="text-container">
                            <p>Derrière elle se cachent ses gens.Ceux qui contribuent à la rendre si unique et qui lui donnent son caractère.Rendez-la plus humaine.plus chaleureuse et accueillante pour ceux qui la visitent en leur permettant une immersion authentique avec les gens qui l'habitent!</p>
                        </div>
                    </div>
                </div>
                
            <div class="container-right">
                <img src="./vendor/images/Loalisation.jpg" alt="Image">
            </div>
        </div>
        </section>
       
        <!----------------->
        <section class="subscription__section" id="recherche">
            <p><span style="color:#08BDA6;">Inscrivez-vous</span> pour recevoir les nouveaux hébergement</p>
            <div class="subscription-container">
                <input type="text" placeholder="Votre adresse courriel...">
                <button type="submit"> Souscrire</button>
            </div>            
        </section>
    </main>        
        <!----------------->
        <footer>
            <div class="conteneur">
                <div class="colonne aPropos">
                    <h3>Partagez votre voyage avec nous</h3>
                    <ul class="reseauxSociaux">
                        <li><box-icon type='logo' name='facebook' color='#08bda6'></box-icon></li>
                        <li><box-icon name='twitter' type='logo' color='#08bda6'></box-icon></li>
                        <li><box-icon name='linkedin' type='logo' color='#08bda6'></box-icon></li>
                        <li><box-icon name='pinterest-alt' type='logo'color='#08bda6' ></box-icon></li>
                        <li><box-icon name='google-plus' type='logo' color='#08bda6'></box-icon></li>
                        <li><box-icon name='instagram' type='logo' color='#08bda6'></box-icon></li>
                    </ul>
                </div>
                <div class="colonne">
                    <h3>Dreaming Get Away</h3>
                    <a href="">À propos</a><br>
                    <a href="">Louer un hébergement</a><br>
                    <a href="">Voyages</a><br>
                    <a href="">Connexion</a><br>
                    <a href="">Inscription</a><br>
                </div>
                <div class="colonne nousJoindre">
                    <h3>Nous joindre</h3>
                    <p><box-icon name='phone' color='#08bda6'></box-icon> sans-frais  1800 555-2834</p>
                    <p style="color: #08BDA6;"><box-icon name='envelope' color='#08bda6'></box-icon> dreminggetaway.com</p>
                    <p><box-icon name='map' type='solid' color='#08bda6' ></box-icon>2092 Blvd St-Joseph, Montréal</p>
                </div>
            </div>
        </footer>
        <!---------------->
        <div class="droitsAuteur">
            Tous droits réservés 2018 © Découvrir le monde par les voyages
        </div>
        
    </main>
<script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
    <script src="./bundle.js"></script>

</body>
</html>
