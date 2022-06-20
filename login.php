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
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="Icon" type="x/image-Icon" href="Favicon.png">
</head>
<body class="login">
<a href="index.php"><h2 class="h2-inlog">< Go back</h2></a>
<h1 class="h1-inlog"><em>Inloggen</em></h1>
<form action="confirmation.php" method="POST">
    <input class="inlog-box1 inlog-box" type="text" name="username" placeholder="username" required>
    <input class="inlog-box2 inlog-box" type="password" name="password" placeholder="password" required>
    <input class="submit-btn btn1" type="submit" name="Button" value="Log in"> <br>
</form>
<?php
    echo $_SESSION['melding'];
    echo $_SESSION['completion-msg'];
    echo $_SESSION['test'];
?>
</body>
</html>