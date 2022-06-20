<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

function JSC($input){
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
try{
    $user = 'root';
    $pass = 'root';
        $dbh = new PDO('mysql:host=dockerphp-master_db_1;dbname=fullstack', $user, $pass);
        $password1 = $_POST['password'];
        $password2 = $_POST['confirm-password'];    
        if($password1 == $password2){
            $_SESSION['completion-msg'] = '<p class="green melding">Account succesfully created!<p>';
            $_SESSION['melding'] = "";
            $dbh->query("insert into Accounts (username, `password`, email) VALUES ('$username', '$password', '$email')");
            header("location: login.php");
        } else {
            $_SESSION['message'] = '<p class="red message">The passwords do not match!<p>';
           header("location: signup.php");
        };
} catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br>";
        die();
}
?>