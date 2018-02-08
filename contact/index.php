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
            <h1>Contact</h1>
            <div class="info-contact">
                <ul class="info-liste">
                    <li><p>Rémi Coulombe</p></li>
                    <li>
                        <img src="../assets/img/mail.svg" />
                        <p>rem.coulombe@gmail.com</p>
                    </li>
                    <li>
                        <img src="../assets/img/phone.svg" /> 
                        <p>514.572.6773</p>
                    </li>
                    <li>
                        <img src="../assets/img/map.svg" />   
                        <p>Montréal, Qc</p>
                    </li>
                    <li>
                        <img src="../assets/img/map.svg" />    
                        <p>Granby, Qc</p>
                    </li>
                </ul>
                <ul class="bonjour">

                </ul>
            </div>
        </div>
    </main>
    <?php include("../blocks/footer.php") ?>
</body>
</html>