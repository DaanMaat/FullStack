<?php
session_start();
$_SESSION['ingelogd'] = false;
try{
    $user = 'root';
    $pass = 'root';
        $dbh = new PDO('mysql:host=dockerphp-master_db_1;dbname=fullstack', $user, $pass);
        $correct = false;
        foreach($dbh->query('SELECT * from Accounts') as $row) {
            $username = $row['username'];
            $password = $row['password'];
            $inserted_username = $_POST['username'];
            $inserted_password = $_POST['password'];        
            if($inserted_username == $username  && $inserted_password == $password){
            $_SESSION['ingelogd'] = true;
            $_SESSION['username'] = $inserted_username;
               header("location: index.php");
               break;
            } else {
                $_SESSION['melding'] = '<p class="red melding">Incorrect username or password! <br>
                No account? <br> Click  <a class="melding-a" href="signup.php?new-account">here</a> to create one!</p>';
                header("location: login.php");
            }
        };
} catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br>";
        die();
}
?>