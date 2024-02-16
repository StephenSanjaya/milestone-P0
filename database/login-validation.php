<?php

    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors',1);

    include "connection.php";

    if(isset($_POST['submit'])){
        $email = $_POST["email"];
        $password = $_POST["password"];
    }

    $sql = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $sql->bind_param("ss", $email, $password);

    $sql->execute();
    $result = $sql->get_result();

    if($result->num_rows > 0){
        header("Location: http://localhost/milestone-P0/home.html");
        session_destroy();
    } else {
        ?>
            <script type="text/javascript">
                alert("user not exists");
                window.location.href = "http://localhost/milestone-P0/login.php";
            </script>
        <?php
    }

    $conn->commit();

    // $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    // $result = $conn->query($sql);

    // if ($result->num_rows > 0){
    //     header("Location: http://localhost/milestone-P0/home.html");
    //     session_destroy();
    // } else{
    //     ?>
    //         <script type="text/javascript">
    //         alert("user not exists");
    //         window.location.href = "http://localhost/milestone-P0/login.php";
    //         </script>
    //     <?php
    // }
    // $conn->close();

?>

