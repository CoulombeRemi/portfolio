<?php 
if(file_exists("../settings.php")){include("../settings.php");}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Contact</title>
    <?php include("../blocks/head.php") ?>
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
                <ul class="info-exSite">
                    <li>
                        <a href="https://soundcloud.com/coulombe36">
                            <img src="../assets/img/soundcloud.svg" />    
                            <p>Soundcloud</p>
                        </a>  
                    </li>
                    <li>
                        <a href="https://vimeo.com/user44672269">
                            <img src="../assets/img/vimeo.svg" />    
                            <p>Vimeo</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.behance.net/coulombe">
                            <img src="../assets/img/behance.svg" />    
                            <p>Behance</p>
                        </a>
                    </li>
                    <li>
                    
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <?php include("../blocks/footer.php") ?>
</body>
</html>