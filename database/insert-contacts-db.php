<?php

    error_reporting(E_ALL);
    ini_set('display_errors',1);

    include "connection.php";

    if(isset($_POST['submit'])){
        $firstname = $_POST["first-name"];
        $lastname = $_POST["last-name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
    }

    $sql = "INSERT INTO contacts(first_name, last_name, email, phone, message) 
    VALUES (
        '$firstname', '$lastname', '$email', $phone, '$message'
    )";

    if($conn->query($sql) == TRUE){
        echo "data berhasil ditambahkan";
        header("Location: http://localhost:5500/home.html");
    } else {
        echo "data gagal ditambahkan". $conn->error;
    }

?>