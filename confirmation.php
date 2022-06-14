<?php
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
               header("location: index.html");
                break;
            } else {
                header("location: login.html");
            }
        };
} catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
}
?>