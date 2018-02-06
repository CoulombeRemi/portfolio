
<?php
    /*
    Redirige sur le bon url quand une autre personne redirige
    mon site
    */
    /*if ($_SERVER["SERVER_NAME"] != "remi.forsale" || $_SERVER["SERVER_NAME"] != "localhost" || $_SERVER["SERVER_NAME"] != "127.0.0.1") {
        header('Location: https://remi.forsale');
        die();
    }*/

?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Rémi Coulombe</title>

    <!--META-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LINK-->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/style/reset.css" />
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--SCRIPT-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    
</head>
<body>
    <?php include("blocks/header.php") ?>
    <main>
    </main>
    <?php include("blocks/footer.php") ?>
</body>
</html>