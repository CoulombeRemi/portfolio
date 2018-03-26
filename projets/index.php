<?php 
if(file_exists("../settings.php")){include("../settings.php");}
?>


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>RC - Projets</title>

    <?php include("../blocks/head.php") ?>
</head>

<body class="propos">
    <?php include("../blocks/header.php") ?>
    <main>
        <section class="sectionTitrePage">
            <div class="container">
                <h1>Autres Projets</h1>
            </div>
        </section>


        <!-- Projet perso -->
        <section class="sectionTitre">
            <div class="container">
                <h2>Projet fin de DEC</h2>
            </div>
        </section>
        <section class="secColor">
            <div class="container">
                <div class="musique-frame">
                    <div class="colorDiv">
                        <ul class="ul-musique" id="ul-web">
                            <li class="site-web">
                                <div>
                                    <img src="../assets/img/projet/timMaisonneuve.jpg" alt="JUCE plugin C++">
                                </div>
                                <div class="text-projet">
                                    <h3>Plugin audio C++</h3>
                                    <p>Pour mon projet de fin de DEC, j'ai décidé d'apprendre un language de programmation que
                                        nous n'avions pas vu au cours de la technique.</p>
                                    <p>J'ai utilisé C++ et le framework
                                        <a href="https://juce.com/"  target="_blank">JUCE</a> pour concevoir un plugin audio pour Windows (VST 64bit) qui sert de Low
                                        Pass, Band Pass et High Pass filter.</p>
                                    <br>
                                    <br>
                                    <p class="downloadbtn">
                                        <a href="" download>Télécharger</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- video -->
        <section class="sectionTitre">
            <div class="container">
                <h2>Vidéo</h2>
            </div>
        </section>
        <section class="secColor">
            <div class="container">
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
            </div>
        </section>

        <!-- web -->
        <section class="sectionTitre">
            <div class="container">
                <h2>Web</h2>
            </div>
        </section>
        <section class="secColor">
            <div class="container">
                <div class="musique-frame">
                    <ul class="ul-musique" id="ul-web">
                        <li class="site-web">
                            <div>
                                <a href="http://tim.cmaisonneuve.qc.ca" target="_blank">
                                    <img src="../assets/img/projet/timMaisonneuve.jpg" alt="site tim TIM">
                                </a>
                            </div>
                            <div class="text-projet">
                                <h3>TIM 2017</h3>
                                <p>Site web officiel du département de Techniques d'Intégration Multimédia.</p>
                                <p>J'ai principalement travaillé sur le design et l'implémentation du style graphique du site
                                    à l'aide de Word Press.</p>
                                <br>
                                <br>
                                <p class="downloadbtn">
                                    <a href="http://tim.cmaisonneuve.qc.ca" target="_blank">Site TIM</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- infography -->
        <section class="sectionTitre">
            <div class="container">
                <h2>Infographie</h2>
            </div>
        </section>
        <section class="secColor">
            <div class="container">
                <div class="musique-frame">
                    <ul class="ul-musique" id="ul-aff">
                        <li class="affiche">
                            <a href="../assets/img/projet/affiche_primaire_st-valentin_2018.jpg" class="aff">
                                <img src="../assets/img/projet/affiche_primaire_st-valentin_2018.jpg" alt="p_st-v_2018">
                            </a>
                        </li>
                        <li class="affiche">
                            <a href="../assets/img/projet/affiche_primaire_st-valentin_2017.jpg" class="aff">
                                <img src="../assets/img/projet/affiche_primaire_st-valentin_2017.jpg" alt="p_st-v_2017">
                            </a>
                        </li>
                        <li class="affiche">
                            <a href="../assets/img/projet/affiche_seondaire_st-valentin_2016_final.jpg" class="aff">
                                <img src="../assets/img/projet/affiche_seondaire_st-valentin_2016_final.jpg" alt="s_st-v_2016">
                            </a>
                        </li>
                        <li class="affiche">
                            <a href="../assets/img/projet/affiche_primaire_halloween_2016.jpg" class="aff">
                                <img src="../assets/img/projet/affiche_primaire_halloween_2016.jpg" alt="p_H_2016">
                            </a>
                        </li>
                        <li class="affiche">
                            <a href="../assets/img/projet/affiche_secondaire_2015.jpg" class="aff">
                                <img src="../assets/img/projet/affiche_secondaire_2015.jpg" alt="s_2016">
                            </a>
                        </li>
                        <li class="affiche">
                            <a href="../assets/img/projet/affiche.jpg" class="aff">
                                <img src="../assets/img/projet/affiche.jpg" alt="3d_2017">
                            </a>
                        </li>
                        <li class="affiche">
                            <a href="../assets/img/projet/storm.jpg" class="aff">
                                <img src="../assets/img/projet/storm.jpg" alt="behance 2016">
                            </a>
                        </li>
                        <li class="affiche">
                            <a href="../assets/img/projet/corn.jpg" class="aff">
                                <img src="../assets/img/projet/corn.jpg" alt="behance 2015">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    </main>
    <?php include("../blocks/footer.php") ?>
</body>

</html>