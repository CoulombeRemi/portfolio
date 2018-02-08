<?php 
if(file_exists("../settings.php")){include("../settings.php");}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Rémi Coulombe</title>

    <!--META-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--LINK-->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/style/reset.css" />
    <link rel="stylesheet" type="text/css" href="../assets/style/style.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--SCRIPT-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/main.js"></script>


    
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