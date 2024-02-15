<?php

   error_reporting(E_ALL);
   ini_set('display_errors',1);

   include "connection.php";

    if(isset($_POST['submit'])){
        $email = $_POST["email"];
        $password = $_POST["password"];
    }

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        header("Location: http://localhost/milestone-P0/home.html");
    } else{
        echo "0 results";
    }
    $conn->close();

?>