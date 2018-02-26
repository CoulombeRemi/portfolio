<?php 
if(file_exists("../settings.php")){include("../settings.php");}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Audio</title>
    <?php include("../blocks/head.php") ?>
</head>
<body class="contact">
    <?php include("../blocks/header.php") ?>
    <main>
        <div class="container">
            <h1>Musique</h1>
            <div class="musique-frame">
                <ul class="ul-musique">
                <!-- On va chercher le fichier JSON -->
                <?php $jsonString = file_get_contents("../assets/track-id.json");
                    $arrayMusique = json_decode($jsonString, true); 
                    // on passe tous les musiques dans la boucle et on change le id du URL avec le bon id
                    // on crer un li avec le iframe a l'interieur
                    foreach($arrayMusique["track-id"] as $musique){ ?>
                        <li class="tracks">
                        <img src="../assets/img/play.svg" />    
                            <div class="popUp">
                                <div class="popUp-content">
                                    <span class="close">&times;</span>
                                    <p><?php echo $musique["name"] ?></p>
                                    <div class="iframeDiv">
                                        
                                        <iframe scrolling="yes" frameborder="no" allow="autoplay" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo $musique["id"] ?>&amp;color=%2300ff9d&amp;auto_play=true&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="coverTune popBtn" style="background-image: url('<?php echo $musique["img"] ?>');"></div>
                        </li>
                    <?php } ?>
                </ul>
            </div> 
            <h1>Vidéo</h1>
            <div class="musique-frame">
                <ul class="ul-musique">
                    <li class="vids">
                        <iframe src="https://player.vimeo.com/video/251260126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        <p>2017 - Musique et effets sonores</p>
                    </li>
                    <li class="vids">
                        <iframe src="https://player.vimeo.com/video/149588060" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        <p>2015 - Effets sonores</p>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <?php include("../blocks/footer.php") ?>
</body>
</html>