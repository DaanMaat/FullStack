<?php
session_start();
if(isset($_GET["loguit"])){
    $_SESSION = array();
    session_destroy();
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="Icon" type="x/image-Icon" href="Favicon.png">
</head>
<body class="signup">
    <a href="index.php"><h2 class="h2-signup">< Go back</h2></a>
    <h1 class="h1-signup"><em>Registreren</em></h1>
    <form action="registration.php" method="POST">
        <input class="signup-box1 signup-box" type="text" name="username" placeholder="username" required>
        <input class="signup-box2 signup-box" type="password" name="password" placeholder="password" required>
        <input class="signup-box3 signup-box" type="email" name="email" placeholder="example@example.com" required>
        <input class="signup-box4 signup-box" type="password" name="confirm-password" placeholder="confirm password" required> 
        <input class="submit-btn btn2" type="submit" name="Button" value="Sign up"> <br>
    </form> 
    <?php
    echo $_SESSION['message'];
    ?>
</body>
</html>