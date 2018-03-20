<?php 
if(file_exists("../settings.php")){include("../settings.php");}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Projets</title>

    <?php include("../blocks/head.php") ?>
</head>
<body class="propos">
    <?php include("../blocks/header.php") ?>
    <main>
        <div class="container">
            <h1>Autres Projets</h1>

            

            <!-- video -->
                <h2>Vidéo</h2>
                <div class="musique-frame">
                    <ul class="ul-musique" id="ul-video">

                        <li class="vids">
                            <div class="vidConent">
                                <div class="vidIframe">
                                   <iframe src="https://player.vimeo.com/video/260672392" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                                </div>
                                <p>2018 - After Effect</p>
                            </div>   
                        </li>

                        <li class="vids">
                            <div class="vidConent">
                                <div class="vidIframe">
                                    <iframe src="https://player.vimeo.com/video/255294765" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                                <p>2018 - After Effect</p> 
                            </div> 
                        </li>
                        
                        <li class="vids">
                            <div class="vidConent">
                                <div class="vidIframe">
                                    <iframe src="https://player.vimeo.com/video/251260126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                                <p>2017 - Maya &amp; After Effect</p> 
                            </div> 
                        </li>
                        
                        <li class="vids">
                            <div class="vidConent">
                                <div class="vidIframe">
                                    <iframe src="https://player.vimeo.com/video/149588060" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                                <p>2015 - Premier Pro</p> 
                            </div>  
                        </li>
                    </ul>
                </div>

            <!-- web -->
            <h2>Web</h2>
            <div class="musique-frame">
                <ul class="ul-musique" id="ul-web">
                    <li class="site-web">
                        <div><a href="http://tim.cmaisonneuve.qc.ca"><img src="../assets/img/projet/timMaisonneuve.jpg" alt="site tim"></a></div>
                        <div>
                            <h3>TIM 2017</h3>
                            <p>Site web gagnant comme nouveau site du département de Techniques d'Intégration Multimédia 2017. Fait en Word Press</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- infography -->
            <h2>Infographie</h2>
            <div class="musique-frame">
                <ul class="ul-musique" id="ul-aff">
                    <li class="affiche">
                        <div class="aff">
                            <img src="../assets/img/projet/affiche_primaire_st-valentin_2018.jpg" alt="p_st-v_2018">
                        </div>
                    </li>
                    <li class="affiche">
                        <div class="aff">
                            <img src="../assets/img/projet/affiche_primaire_st-valentin_2017.jpg" alt="p_st-v_2017">
                        </div>
                    </li>
                    <li class="affiche">
                        <div class="aff">
                            <img src="../assets/img/projet/affiche_seondaire_st-valentin_2016_final.jpg" alt="s_st-v_2016">
                        </div>
                    </li>
                    <li class="affiche">
                        <div class="aff">
                            <img src="../assets/img/projet/affiche_primaire_halloween_2016.jpg" alt="p_H_2016">
                        </div>
                    </li>
                    <li class="affiche">
                        <div class="aff">
                            <img src="../assets/img/projet/affiche_secondaire_2015.jpg" alt="s_2016">
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </main>
    <?php include("../blocks/footer.php") ?>
</body>
</html>