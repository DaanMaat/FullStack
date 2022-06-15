<?php
session_start();
$password1 = $_POST['password'];
$password2 = $_POST['confirm-password'];    
if($password1 == $password2){
    $_SESSION['completion-msg'] = '<p class="green melding">Account succesfully created!<p>';
    $_SESSION['melding'] = "";
    header("location: login.php");
} else {
    $_SESSION['message'] = '<p class="red message">The passwords do not match!<p>';
    header("location: signup.php");
};
?>