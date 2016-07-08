<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- seo -->
    <meta name="keywords" content="front-end,développeur,intégrateur,web,html5,css3,php,javascript,jquery,victor Léonard,seo,ux,référencement">
    <meta name="author" content="Victor LEONARD">
    <title>Victor LEONARD - Développeur Front-End - Intégrateur -  Portfolio - Création de site Internet</title>
    <meta name="description" content="Intégrateur et Développeur Front-End à Paris je crée des sites internet en apportant une attention particulière au référencement naturel, à l'ergonomie et à l'expérience utilisateur (UX)" >
    <!-- end seo -->
    
    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
    <!-- end font -->

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="js/jquery.circliful.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="css/video-coverr.css" type="text/css" />
    <!-- end CSS -->
    
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- end favicon -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="preloader">
  <div id="status">&nbsp;</div><p style="padding-top:50px;text-align:center;font-family: 'Press Start 2P', cursive;font-size:1em;color:#009688">Veuillez patienter...</p>
</div>

    
    <div id="top" class="container-fluid header">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-md-2 col-xs-1">
                            <div class="header-logo"><a href="#"><img src="img/logo.png"></a></div>
                        </div>
                        <nav class="nav col-md-10 col-xs-11">
                            <ul>
                                <li><a href="#presentation">Présentation</a></li>
                                <li><a href="#competences">Compétences</a></li>
                                <li><a href="#realisations">Réalisations</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="hamburger-container">
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        </div>
                    </div>
                    <nav class="col-xs-12 menu-mobile menu-mobile-hide">
                            <ul>
                                <li><a href="#presentation">Présentation</a></li>
                                <li><a href="#competences">Compétences</a></li>
                                <li><a href="#realisations">Réalisations</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end nav -->

    <div class="container-fluid home">
        <div class="row">
            <div class="home-title col-xs-12">
                <div class="home-title-cell">
                    <h1 class="home-title-name animated">Victor LEONARD</h1>
                    
                    <div class="title-separation"></div>
                    
                    <div class="home-title-fonction">
                        <h2 class="type-text" title="^3000 De^500 ~1 é^500 veloppeur ^500  Fr☺^500 ~1 ont-end^500 ~3 End^5000 \n\n Vous voulez en savoir plus ?\n c'est en bas que ça se passe\n↓↓↓\n↓↓\n↓\n^9000 ~100 ^1000 d;">Développeur Front-End</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end home -->
    
    <!--<div class="homepage-hero-module">
    <div class="video-container">
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
            <source src="videos/Aloha-Mundo.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="videos/Aloha-Mundo.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class="poster hidden">
            <img src="videos/Aloha-Mundo.jpg" alt="">
        </div>
    </div>
</div>-->

    <!-- presentation -->
    <div id="presentation" class="container-fluid pres">
        <div class="interrogation-ligne-container">
            <div class="interrogation"></div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <h1 class="sub-title animated">Qui Suis-Je ?</h1>
            </div>
        </div>
        <!-- end title -->

        <!-- picto left -->
        <div class="row pres-row">
            <div class="col-sm-2"></div>

            <div class="col-sm-2 col-xs-12 ">
                <div class="pres-animated animated pres-paragraphe-picto">
                    <img src="img/study_hat.png" alt="">
                </div>
            </div>

            <div class="col-sm-6 col-xs-12 pres-paragraphe-cont">
                <p class="pres-animated-text-right animated pres-paragraphe">
                    Titulaire d’une Maitrise AES. <br /><i>C'est quoi le rapport avec le web me direz-vous ? Et bien aucun !</i>
                </p>
            </div>

            <div class="col-sm-2"></div>
        </div>
        <!-- end diplome -->

        <!-- picto right -->
        <div class="row pres-row">
            <div class="col-sm-2 pull-right"></div>

            <div class="col-sm-2 col-xs-12 pull-right">
                <div class="pres-animated animated pres-paragraphe-picto">
                    <img src="img/presentation-postes.png" alt="">
                </div>
            </div>

            <div class="col-sm-6 col-xs-12 pres-paragraphe-cont pull-right">
                <p class="pres-animated-text-left animated pres-paragraphe">
                    J’ai occupé divers postes comme assistant recrutement, gestionnaire action sociale, gestionnaire contentieux et gestionnaire statistiques...<br />
                    <!--<i>Et là c'était le gestionnaire de trop ;-)</i>-->
                </p>
            </div>

            <div class="col-sm-2"></div>
        </div>
        <!-- end postes -->


        <!-- picto left -->
        <div class="row pres-row">
            <div class="col-sm-2"></div>

            <div class="col-sm-2 col-xs-12 ">
                <div class="pres-animated animated pres-paragraphe-picto">
                    <img src="img/presentation-ampoule.png" alt="">
                </div>
            </div>

            <div class="col-sm-6 col-xs-12 pres-paragraphe-cont">
                <p class="pres-animated-text-right animated pres-paragraphe">
                Un jour, j’ai eu une révélation : devenir <strong>développeur web</strong>.   
                </p>
            </div>

            <div class="col-sm-2"></div>
        </div>
        <!-- end diplome -->


        <!-- picto right -->
        <div class="row pres-row">
            <div class="col-sm-2 pull-right"></div>
            <div class="col-sm-2 col-xs-12 pull-right">
                <div class="pres-animated animated pres-paragraphe-picto">
                    <img src="img/presentation-learning.png" alt="">
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 pres-paragraphe-cont pull-right">
                <p class="pres-animated-text-left animated pres-paragraphe">
                    Pour atteindre cet objectif, j’ai suivi des cours au CNAM, potassé des tutoriels sur internet, lu des ouvrages.
                </p>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <!-- end postes -->
        
         <!-- picto left -->
        <div class="row pres-row">
            <div class="col-sm-2"></div>

            <div class="col-sm-2 col-xs-12 ">
                <div class="pres-animated animated pres-paragraphe-picto">
                    <img src="img/Social_interactions_handshake-20.png" alt="">
                </div>
            </div>

            <div class="col-sm-6 col-xs-12 pres-paragraphe-cont">
                <p class="pres-animated-text-right animated pres-paragraphe">
                J’ai pu alors décrocher un travail de <strong>développeur Front-End</strong> dans un groupe de protection sociale.
                </p>
            </div>

            <div class="col-sm-2"></div>
        </div>
        <!-- end diplome -->

        <!-- en bref -->
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="bref-picto">
                    <img class="center-block" src="img/photo-de-moi-fond-rouge.png" alt="">
                </div>
                <div class="bref-text">
                    <h3>En bref...</h3>
                    <p style="text-align:left;line-height:2em;">
                        Autodidacte, passionné par le <strong>développement web</strong>, le webdesign et les nouvelles technologies mais aussi par la musique et tout ce qui ne touche pas au foot.<br/> Je vous invite à aller voir mes <a class="realisations-enBref-link" href="#realisations" >réalisations</a>.<br />N'hésitez pas à me <a class="realisations-enBref-link" href="#contact">contacter</a> si vous voulez en savoir plus sur mon parcours, mes passions...
                    </p>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <!-- end presentation -->

    <!-- competence -->
    <div id="competences" class="container-fluid competence">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="sub-title animated">Compétences</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h2>HTML5 - CSS3</h2>
                        <div class="myStat center-block" data-dimension="200" data-text="90%" data-fontsize="36" data-percent="90" data-fgcolor="#1967d2" data-bgcolor="#eee" data-width="15" data-bordersize="15" data-animationstep="2">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <h2>Javascript - jQuery</h2>
                        <div class="myStat center-block" data-dimension="200" data-text="75%" data-fontsize="36" data-percent="75" data-fgcolor="#1967d2" data-bgcolor="#eee" data-width="15" data-bordersize="15" data-animationstep="2">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <h2>PHP</h2>
                        <div class="myStat center-block" data-dimension="200" data-text="55%" data-fontsize="36" data-percent="55" data-fgcolor="#1967d2" data-bgcolor="#eee" data-width="15" data-bordersize="15" data-animationstep="2">
                        </div>
                    </div>
                </div>

                <div class="row competence-row2">
                    <div class="col-sm-4">
                        <h2>Wordpress</h2>
                        <div class="myStat center-block" data-dimension="200" data-text="30%" data-fontsize="36" data-percent="30" data-fgcolor="#1967d2" data-bgcolor="#eee" data-width="15" data-bordersize="15" data-animationstep="2">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <h2>Photoshop</h2>
                        <div class="myStat center-block" data-dimension="200" data-text="60%" data-fontsize="36" data-percent="60" data-fgcolor="#1967d2" data-bgcolor="#eee" data-width="15" data-bordersize="15" data-animationstep="2">
                        </div>
                    </div>

                    <div class="col-sm-4" style="text-align:center">
                        <p style="font-size:1.5em">Divers</p>
                        <h3>Sass</h3>
                        <h3>Less</h3>
                        <h3>Bootstrap</h3>
                        <h3>SMACSS</h3>
                        <h3>GIT</h3>
                        <h3>Néolane</h3>
                        <h3>Cloud9</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end competence -->

    <!-- realisations -->
    <div id="realisations" class="container-fluid realisations">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="sub-title animated">Réalisations</h1>
                    </div>
                </div>
                
                <!--1ère ligne-->
                <!--1ère ligne-->
                <!--1ère ligne-->
                <div class="row realisation-ligne animated">
                    <div class="col-sm-4 col-xs-12 realisation-block-1">
                        <div class="realisation-image">
                            <div class="realisation-fond animated"></div>
                            <div class="realisation-titre animated">Mariage</div>
                            <img class="img-responsive" src="img/projets/mariage-thumbnail.jpg" alt="">
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-xs-12 realisation-block-2">
                        <div class="realisation-image">
                            <div class="realisation-fond animated"></div>
                            <div class="realisation-titre animated">Site interne</div>
                            <img class="img-responsive" src="img/projets/interne.jpg"/>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-xs-12 realisation-block-3">
                        <div class="realisation-image">
                            <div class="realisation-fond animated"></div>
                            <div class="realisation-titre animated">PROBTP Amplitude</div>
                            <img class="img-responsive" src="img/projets/amplitude-thumbnail.jpg" alt="">
                        </div>
                    </div>
                </div>
                
                <!--1ère ligne - détail-->
                <!--1ère ligne - détail-->
                <div class="rea" id="rea-1" style="margin-bottom:100px;display:none;"></div>
                <div class="row realisation-detail realisation-detail-1" style="display:none;">
                    <div class="col-sm-6 col-sm-12">
                        <ul class="rslides animated">
                            <li><img class="img-responsive" src="img/projets/mariage-1.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/mariage-2.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/mariage-3.jpg" alt=""></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-sm-12 animated realisation-detail-text">
                        <h3>Mariage</h3>
                        <p>Site réalisé pour la préparation d'un mariage</p>
                        <ul>
                            <li>Langages utilisés : HTML5, CSS3, jQuery</li>
                            <li>Utilisation de l'API Google Map</li>
                            <li>Page d'administration sous Wordpress</li>
                        </ul>
                        <p><a class="btn btn-info" href="http://www.annesophieetflorian.fr/" target="_blank">Voir le site</a></p>
                        
                    </div>
                </div>
                
                <div class="rea" id="rea-2" style="margin-bottom:100px;display:none;"></div>
                <div class="row realisation-detail realisation-detail-2" style="display:none;">

                    <div class="col-sm-6 col-sm-12">
                        <ul class="rslides animated">
                            <li><img class="img-responsive" src="img/projets/interne.jpg">
                        </ul>
                    </div>

                    <div class="col-sm-6 col-sm-12 animated realisation-detail-text">
                        <h3>Site interne</h3>
                        <p>Réalisation d'un site interne</p>
                        <ul>
                            <li>Découpage de la maquette photoshop et intégration front (HTML5, CSS3, jQuery)</li>
                            <li>Page d'administration sous Wordpress</li>
                        </ul>
                        
                    </div>
                </div>

                <div class="rea" id="rea-3" style="margin-bottom:100px;display:none;"></div>
                <div class="row realisation-detail realisation-detail-3" style="display:none;">

                    <div class="col-sm-6 col-sm-12">
                        <ul class="rslides animated">
                            <li><img class="img-responsive" src="img/projets/amplitude-1.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/amplitude-2.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/amplitude-3.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/amplitude-4.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/amplitude-5.jpg" alt=""></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-sm-12 animated realisation-detail-text">
                        <h3>PROBTP Amplitude</h3>
                        <p>Site promotionnel</p>
                        <ul>
                            <li>Découpage de la maquette photoshop et intégration front (HTML5, CSS3, jQuery)</li>
                        </ul>
                        <p><a class="btn btn-info" href="http://www.remboursements-sante.fr/" target="_blank">Voir le site</a></p>
                    </div>

                </div>
                <!--end 1ère ligne - détail-->
                <!--end 1ère ligne - détail-->
                
                <!--end 1ère ligne -->
                
                <!--2ème ligne-->
                <!--2ème ligne-->
                <!--2ème ligne-->
                <div class="row realisation-ligne animated">
                    <div class="col-sm-4 col-xs-12 realisation-block-4">
                        <div class="realisation-image">
                            <div class="realisation-fond animated"></div>
                            <div class="realisation-titre animated">Shake BB</div>
                            <img class="img-responsive" src="img/projets/shake-thumbnail.jpg" alt="">
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-xs-12 realisation-block-5">
                        <div class="realisation-image">
                            <div class="realisation-fond animated"></div>
                            <div class="realisation-titre animated">PROBTP WIZZ</div>
                            <img class="img-responsive" src="img/projets/probtpwizz/wizz-thumbnail.png" alt="">
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-xs-12 realisation-block-6">
                        <div class="realisation-image">
                            <div class="realisation-fond animated"></div>
                            <div class="realisation-titre animated">Emailing</div>
                            <img class="img-responsive" src="img/projets/emailing-thumbnail.jpg" alt="">
                        </div>
                    </div>
                </div>
                
                <!--2ème ligne - détail-->
                <!--2ème ligne - détail-->
                <div class="rea" id="rea-4" style="margin-bottom:100px;display:none;"></div>
                <div class="row realisation-detail realisation-detail-4" style="display:none;">
                    <div class="col-sm-6 col-sm-12">
                        <ul class="rslides animated">
                            <li><img class="img-responsive" src="img/projets/shake-1.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/shake-2.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/shake-3.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/shake-4.jpg" alt=""></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-sm-12 animated realisation-detail-text">
                        <h3>Shake BB</h3>
                        <p>Site de présentation pour un groupe de musique</p>
                        <ul>
                            <li>Création de la charte graphique sous Photoshop</li>
                            <li>Site en cours de développement</li>
                        </ul>
                        
                    </div>
                </div>
                
                <div class="rea" id="rea-5" style="margin-bottom:100px;display:none;"></div>
                <div class="row realisation-detail realisation-detail-5" style="display:none;">

                    <div class="col-sm-6 col-sm-12">
                        <ul class="rslides animated">
                            <li><img class="img-responsive" src="img/projets/probtpwizz/1-EC-game-home.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/probtpwizz/9-EC-game-jeuxmemoriz.png" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/probtpwizz/10-EC-game-prezcolorfizz.png" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/probtpwizz/11-EC-game-jeuxcolorfizz.png" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/probtpwizz/13-EC-game-jeuxbubblewizz.png" alt=""></li
                            <li><img class="img-responsive" src="img/projets/probtpwizz/21.3-EC-game-bonne-réponse-ter.png" alt=""></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-sm-12 animated realisation-detail-text">
                        <h3>PROBTP WIZZ</h3>
                        <p>Application web de type 'quizz' pour smartphones et tablettes</p>
                        <ul>
                            <li>Découpage de la maquette photoshop et intégration front (HTML5, CSS3, jQuery)</li>
                            <li>Optimisation pour smartphone</li>
                            <li>Développement de 3 jeux</li>
                        </ul>
                        
                    </div>
                </div>

                <div class="rea" id="rea-6" style="margin-bottom:100px;display:none;"></div>
                <div class="row realisation-detail realisation-detail-6" style="display:none;">

                    <div class="col-sm-6 col-sm-12">
                        <ul class="rslides animated">
                            <li><img class="img-responsive" src="img/projets/emailing-1.png" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/emailing-2.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/emailing-3.png" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/emailing-4.jpg" alt=""></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-sm-12 animated realisation-detail-text">
                        <h3>Emailing</h3>
                        <p>Intégration d'Emailing</p>
                        <ul>
                            <li>Création d'emailing en HTML4 à partir de maquette photoshop</li>
                            <li>Intégration dans le logiciel Adobe Campaign (néolane) avec insertion de variables de personnalisation</li>
                            <li>Optimisation et tests de compatibilité</li>
                            <li>Emailing responsive</li>
                        </ul>
                    </div>

                </div>
                <!--end 2ème ligne - détail-->
                <!--end 2ème ligne - détail-->
                
                <!--end 2ème ligne -->


                <!--3ème ligne-->
                <!--3ème ligne-->
                <div class="row realisation-ligne animated">
                    <div class="col-sm-4 col-xs-12 realisation-block-7">
                        <div class="realisation-image">
                            <div class="realisation-fond animated"></div>
                            <div class="realisation-titre animated">Memory</div>
                            <img class="img-responsive" src="img/projets/memory-thumbnail.png" alt="">
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-xs-12 realisation-block-8">
                        <div class="realisation-image">
                            <div class="realisation-fond animated"></div>
                            <div class="realisation-titre animated">Test de conformité</div>
                            <img class="img-responsive" src="img/projets/test-conformite-thumbnail.jpg" alt="">
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-xs-12 realisation-block-9">
                        <div class="realisation-image">
                            <div class="realisation-fond animated"></div>
                            <div class="realisation-titre animated">Départementales Surgères</div>
                            <img class="img-responsive" src="img/projets/surg-dep-home-thumbnail.jpg" alt="">
                        </div>
                    </div>
                </div>
                
                <!--3ème ligne - détail-->
                <div class="rea" id="rea-7" style="margin-bottom:100px;display:none;"></div>
                <div class="row realisation-detail realisation-detail-7" style="display:none;">
                    <div class="col-sm-6 col-sm-12">
                        <ul class="rslides animated">
                            <li><img class="img-responsive" src="img/projets/memory-1.png" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/memory-2.png" alt=""></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-sm-12 animated realisation-detail-text">
                        <h3>Memory</h3>
                        <p>Jeux de mémoire : retourner 2 cartes identiques</p>
                        <ul>
                            <li>Langages utilisés : HTML5, CSS3, jQuery</li>
                        </ul>
                        <p><a class="btn btn-info" href="http://www.victorleonard.fr/lab/memory/index.html" target="_blank">Jouer !</a></p>
                    </div>
                </div>
                
                <div class="rea" id="rea-8" style="margin-bottom:100px;display:none;"></div>
                <div class="row realisation-detail realisation-detail-8" style="display:none;">

                    <div class="col-sm-6 col-sm-12">
                        <ul class="rslides animated">
                            <li><img class="img-responsive" src="img/projets/conform-1.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/conform-2.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/conform-3.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/conform-responsive.jpg" alt=""></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-sm-12 animated realisation-detail-text">
                        <h3>Test de conformité</h3>
                        <p>Questionnaire interactif permettant aux entreprises de vérifier si elles sont conformes aux dispositions légales</p>
                        <ul>
                            <li>Application réalisée à partir de maquette photoshop</li>
                            <li>Questionnaire réalisé sous la forme d'un 'Single Page Application'</li>
                            <li>Langages utilisés : HTML5 - CSS3 - jQuery</li>
                            <li>Optimisation SEO</li>
                            <li>Questionnaire responsive</li>
                        </ul>
                        <p><a class="btn btn-info" href="http://www.probtp.com/probtp/upload/media/testez-votre-conformite-ani/index.html" target="_blank">Voir le questionnaire</a></p>
                    </div>
                </div>

                <div class="rea" id="rea-9" style="margin-bottom:100px;display:none;"></div>
                <div class="row realisation-detail realisation-detail-9" style="display:none;">

                    <div class="col-sm-6 col-sm-12">
                        <ul class="rslides animated">
                            <li><img class="img-responsive" src="img/projets/surg-dep-projets-prod.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/surg-dep-calendrier-prod.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/surg-dep-responsive.jpg" alt=""></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-sm-12 animated realisation-detail-text">
                        <h3>Départementales Surgères</h3>
                        <p>Site de présentation d'un candidat aux élections départementales de mars 2015</p>
                        <ul>
                            <li>Création de la charte graphique sous photoshop à partir de visuels print</li>
                            <li>Langages utilisés : HTML5 - CSS3 - jQuery</li>
                            <li>Optimisation SEO</li>
                            <li>Site responsive</li>
                        </ul>
                        <p><a class="btn btn-info" href="http://www.departementales-surgeres.fr/" target="_blank">Voir le site</a></p>
                    </div>

                </div>
                <!--end 3ème ligne - détail-->
                <!--end 3ème ligne - détail-->

                

                

                <!--4ème ligne -->
                <div class="row realisation-ligne animated">
                    <div class="col-sm-4 col-xs-12 realisation-block-10">
                        <div class="realisation-image">
                            <div class="realisation-fond animated"></div>
                            <div class="realisation-titre animated">Surgères Demain</div>
                            <img class="img-responsive" src="img/projets/surg-demain-home-thumbnail.jpg" alt="">

                        </div>
                    </div>
                    
                     <div class="col-sm-4 col-xs-12 realisation-block-11">
                        <div class="realisation-image">
                            <div class="realisation-fond animated"></div>
                            <div class="realisation-titre">L'Observatoire des Marchés</div>
                            <img class="img-responsive" src="img/projets/obs-accueil-thumbnail.jpg" alt="">

                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-xs-12 realisation-block-12">
                        <div class="realisation-image">
                            <div class="realisation-fond animated"></div>
                            <div class="realisation-titre animated">Rich SMS</div>
                            <img class="img-responsive" src="img/projets/rich-sms-admin.png" width="400" alt="">
                        </div>
                    </div>
                </div>
                
                <div class="rea" id="rea-10" style="margin-bottom:100px;display:none;"></div>
                <div class="row animated realisation-detail realisation-detail-10" style="display:none;">
                    <div class="col-sm-6 col-sm-12">
                        <ul class="rslides animated">
                            <li><img class="img-responsive" src="img/projets/surg-demain-equipe.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/surg-demain-projet.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/surg-demain-responsive.jpg" alt=""></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-sm-12 animated realisation-detail-text">
                        <h3>Surgères Demain</h3>
                        <p>Création d’un site internet pour un candidat aux élections municipales 2014.</p>
                        <ul>
                            <li>Charte graphique</li>
                            <li>Front-End : HTML, CSS, jQuery</li>
                            <li>Back-End : PHP</li>
                            <li>Optimisation SEO</li>
                            <li>Site Responsive</li>
                        </ul>
                        <p><a class="btn btn-info" href="http://www.surgeresdemain.fr/" target="_blank">Voir le site</a></p>
                    </div>
                </div>
                
                <div class="rea" id="rea-11" style="margin-bottom:100px;display:none;"></div>
                <div class="row realisation-detail realisation-detail-11" style="display:none;">
                    <div class="col-xs-6">
                        <ul class="rslides animated">
                            <li><img class="img-responsive" src="img/projets/obs-accueil.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/obs-article.jpg" alt=""></li>
                            <li><img class="img-responsive" src="img/projets/obs-article-detail.jpg" alt=""></li>

                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-12 animated realisation-detail-text">
                        <h3>L'Observatoire des Marchés</h3>
                        <p>Création d’un site intranet recensant les études marketing et la veille concurrentielle</p>
                        <ul>
                            <li>Charte graphique en fonction du cahier des charges</li>
                            <li>Front-End : HTML, CSS</li>
                        </ul>
                    </div>
                </div>

                <div class="rea" id="rea-12" style="margin-bottom:100px;display:none;"></div>
                <div id="rea-5" class="row realisation-detail realisation-detail-12" style="display:none;">
                    <div class="col-xs-6">
                        <ul class="rslides animated">
                            <li><img class="img-responsive" src="img/projets/rich-sms-admin.png" alt="">
                            </li>
                            <li><img class="img-responsive" src="img/projets/rich-sms-admin-envoi.png" alt="">
                            </li>
                            <li><img src="img/projets/rich-sms-exemple-vac.png" alt="" style="width:300px !important;">
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-12 animated realisation-detail-text">
                        <h3>Rich SMS</h3>
                        <p>Création de pages web adaptées aux mobiles</p>
                        <p>Outil de suivi personnalisé (nombre de connexion, type de mobile...)</p>
                        
                        <p>Langages utilisés : HTML5, CSS3, PHP</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end realisations -->
    
     
    <!-- contact -->
    <div id="contact" class="container-fluid contact-container">
        <div class="row">
            <div class="container">
            <div id="contact-form" class="row">
                    <div class="col-sm-12">
                        <h1 class="sub-title animated">Contact</h1>
                    </div>
                </div>
            <div  class="col-sm-12">
                <form method="POST" action="contact-treatment.php">
                    <?php if(array_key_exists('errors',$_SESSION)): ?>
                        <div class="alert alert-danger">
                        <?= implode('<br/>',$_SESSION['errors']); ?>
                        </div>
                    <?php  endif; ?>
                    
                    <?php if(array_key_exists('success',$_SESSION)): ?>
                        <div class="alert alert-success">
                        Votre message a bien été envoyé.
                        </div>
                    <?php endif; ?>
                    
                    <div class="form-group">
                        <label for="name">Nom :</label>
                        <input id="name" class="form-control" type="text" name="name" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input class="form-control" type="email" name="email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>"/>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Votre message : </label>
                        <textarea class="form-control" rows="10" name="message"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    
    <div class="container-fluid footer">
        <div class="row">
            <div class="col-xs-12">
            </div>
        </div>
    </div>



    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/jquery.circliful.min.js"></script>
    <script src="js/jquery.inview.js"></script>
    <script src="js/responsiveslides.js"></script>
    <script src="js/jquery.teletype.js"></script>
    <script src="js/video-coverr.js"></script>
    <script>
        /*$( function() {
            $( '.type-text' ).each( function() {
                var items = $( this ).attr( 'title' ) + ';' + $( this ).text();
                $( this ).empty().attr( 'title', '' ).teletype( {
                    text: $.map( items.split( ';' ), $.trim ),
                    typeDelay: 10,
                    backDelay: 20,
                    cursor: '|', 
                    delay: 3000,
                    preserve: true,
                    prefix: '',
                    loop: 1,
                    humanise: true
                } );
            } );
        } );*/
        </script>
    

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51814293-1', 'victorleonard.fr');
  ga('send', 'pageview');

</script>
</body>
<!--browser-update-->
<script> 
var $buoop = {c:2}; 
function $buo_f(){ 
 var e = document.createElement("script"); 
 e.src = "//browser-update.org/update.min.js"; 
 document.body.appendChild(e);
};
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}
</script>

</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>