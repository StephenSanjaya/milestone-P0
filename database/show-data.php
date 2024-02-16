<?php

    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors',1);

    include "connection.php";

    if ( $conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }
    
    if ( !isset($_SESSION) || !isset($_SESSION['myemail']) ) {
        $email = "";
        $password = "";
    }else{
        $s_email = $_SESSION['myemail'];

        $sql = "SELECT * FROM users WHERE email = '$s_email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $email = $row["email"];
                $password = $row["password"];
            }
        } else{
            echo "0 results";
        }
    }

    $conn->close();

?>