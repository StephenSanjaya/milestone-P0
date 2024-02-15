<?php

    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors',1);

    include "connection.php";

    if(isset($_POST['submit'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $conf_password = $_POST["confirm_password"];
    }

    $sql = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')";

    $_SESSION['myemail'] = $email;

    if($conn->query($sql) == TRUE){
        echo "data berhasil ditambahkan";
        header("Location: http://localhost/milestone-P0/login.php");
        exit();
    } else {
        echo "data gagal ditambahkan". $conn->error;
    }

?>