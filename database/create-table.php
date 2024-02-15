<?php

   error_reporting(E_ALL);
   ini_set('display_errors',1);

   include "connection.php";

   $user = "CREATE TABLE users(
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL
   )";

    $contact = "CREATE TABLE contacts(
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        phone INT(9) NOT NULL,
        message VARCHAR(50) NOT NULL
    )";

   if($conn->query($user) == TRUE && $conn->query($contact) == TRUE){
        echo "Table berhasil dibuat";
   } else {
        echo "Table gagal dibuat". $conn->error;
   }

?>