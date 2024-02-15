<?php

    error_reporting(E_ALL);
    ini_set('display_errors',1);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "food";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ( $conn->connect_error){
        die("koneksi gagal:". $conn->connect_error);
    }

    // echo "koneksi berhasil";
    
?>