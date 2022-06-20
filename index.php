<?php
session_start();
$_SESSION['melding'] = "";
$_SESSION['completion-msg'] = "";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fullstack Daanoontje</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <link rel="Icon" type="x/image-Icon" href="Favicon.png">
    </head>
    <body class="index">
        <?php
        if(!$_SESSION['ingelogd']){
        echo 
        '<div class="login/sign-up">
            <a id="login" href="login.php">Log in</a>
            <p id="line">|</p>
            <a id="signup" href="signup.php?new-account">Sign up</a>
        </div>';
        } else {
            echo 
        '<div class="user-box">
            <p class="username">'.$_SESSION['username'].' </p>
            <img class="UserIcon" src="User icon.png">
            <p><a class="Uitlog-btn" href="login.php?loguit">Uitloggen</a></p>
            <p><a class="Setting" href="settings.php">Settings</a></p>
        </div>';
        }
        ?>
        <div class="header">
            <h1>Welkom op de site</h1>
        </div>
        <h2 class="info">Over mij</h2>
        <p class="info">Welkom op mijn website, ik ben Daan. Ik ben 19 jaar oud en studeer Software Development, MBO niveau 4 bij het ROC van Flevoland. Ik heb uitgebreidde kennis in HTML/CSS, Java, Javascript, SQL & PHP.  Katten zijn mijn lievelingsdieren. Zelf heb ik ook 2 katten. Mijn hobby's zijn gamen, netflix kijken, Twitch kijken/streamen, videos editen & programmeren. Ik doe ook aan sport, ik zit in een korfbal team en ben in het voorjaar van 2022 kampioen geworden. Ik heb ook wat projecten gemaakt. Hieronder staan de 3 linkjes.</p>
        <a class="projecten" href="https://www.youtube.com/watch?v=1DFT4r-z1T0">Ik heb pong gemaakt met Java</a> <br>
        <a class="projecten" href="https://daanmaat.github.io/YahtzeeOnline/">Yahtzee door middel van Javascript</a> <br>
        <a class="projecten" href="https://daanmaat.github.io/HTML-CSS-eindopdracht/">Webpagina met HTML & advanced CSS</a>
        <img class="Kattenfoto" src="Kattenfoto.jpg" alt="Kattenfoto">
    </body>
</html>