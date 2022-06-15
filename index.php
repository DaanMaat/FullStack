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
     </div>';
    }
    ?>
    <div class="header">
        <h1>Ik ben Daanoontje</h1>
    </div>
</body>
</html>