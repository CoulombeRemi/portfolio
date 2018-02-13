<?php 
if(file_exists("../settings.php")){include("../settings.php");}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Musique</title>
    <?php include("../blocks/head.php") ?>
</head>
<body class="contact">
    <?php include("../blocks/header.php") ?>
    <main>
        <div class="container">
            <h1>Musique</h1>
            <div class="musique-frame">
            

            <button id="popBtn">Open Modal</button>
            <div id="popUp">
                <div class="popUp-content">
                    <span class="close">&times;</span>
                    <p>Some text in the Modal..</p>
                </div>
            </div>
            


                <ul class="ul-musique">
                <!-- On va chercher le fichier JSON -->
                <?php $jsonString = file_get_contents("../assets/track-id.json");
                    $arrayMusique = json_decode($jsonString, true); 
                    // on passe tous les musiques dans la boucle et on change le id du URL avec le bon id
                    // on crer un li avec le iframe a l'interieur
                    foreach($arrayMusique["track-id"] as $musique){ ?>
                        <li class="tracks">
                            <iframe scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo $musique["id"] ?>&amp;color=%2300ff9d&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                        </li>
                    <?php } ?>
                </ul>
            </div> 
        </div>
    </main>
    <?php include("../blocks/footer.php") ?>
</body>
</html>