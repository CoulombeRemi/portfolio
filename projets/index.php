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
            <ul class="ul-musique">
                <li class="affiche">
                    <div>
                        <img src="../assets/img/projet/affiche_primaire_st-valentin_2018.jpg" alt="p_st-v_2018">
                    </div>
                </li>
                <li class="affiche">
                    <img src="../assets/img/projet/affiche_primaire_st-valentin_2017.jpg" alt="p_st-v_2017">
                </li>
                <li class="affiche">
                    <img src="../assets/img/projet/affiche_seondaire_st-valentin_2016_final.jpg" alt="s_st-v_2016">
                </li>
                <li class="affiche">
                    <img src="../assets/img/projet/affiche_primaire_halloween_2016.jpg" alt="p_H_2016">
                </li>
                <li class="affiche">
                    <img src="../assets/img/projet/affiche_secondaire_2015.jpg" alt="s_2016">
                </li>
            </ul>
            <ul class="ul-musique">
                <li class="site-web">
                    <a href="http://tim.cmaisonneuve.qc.ca"><img src="../assets/img/projet/timMaisonneuve.jpg" alt="site tim"></a>
                </li>
            </ul>
        </div>
    </main>
    <?php include("../blocks/footer.php") ?>
</body>
</html>