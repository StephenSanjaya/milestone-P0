<?php
    include "./database/show-data.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food</title>
    <link rel="stylesheet" href="./asset/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav class="stroke navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand text-light fs-1" href="#">Food</a>
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active text-light fs-5" aria-current="page" href="./home.html">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light fs-5" href="./menu.html">Menu</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light fs-5" href="./gallery.html">Gallery</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light fs-5" href="./about_us.html">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light fs-5" href="./contact_us.html">Contact Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light fs-5" href="./login.html">Login/Register</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <section id="form-section">
        <div class="form-title">
            <h1>Login</h1>
        </div>
        <form method="POST" action="./database/login-validation.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $password; ?>" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button onclick="" id="btn-login" name="submit" type="submit" class="btn btn-primary d-block">Login</button>
            <div class="sign-up-link">
                <p>Don't have an account? <a href="./register.html">Signup now</a></p>
            </div>
        </form>
    </section>

    <footer>
        <h1>©2023 Stpehen, All Rights Reserved.</h1>
    </footer>
</body>
</html>