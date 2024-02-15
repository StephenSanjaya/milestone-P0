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
            <h1>Contact Us</h1>
        </div>
        <form method="post" action="./database/insert-contacts-db.php">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <div class="inpName-div">
                    <input type="text" class="form-control" id="exampleInputFn" placeholder="First name" name="first-name" required>
                    <input type="text" class="form-control" id="exampleInputLn" placeholder="Last name" name="last-name" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPhone" class="form-label">Phone</label>
                <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="### ### ####" class="form-control" id="exampleInputPhone" name="phone" required>
            </div>
            <fieldset disabled>
                <div class="mb-3">
                    <label for="exampleInputSubject" class="form-label">Message subject</label>
                    <input type="text" class="form-control" id="exampleInputSubject" placeholder="Request">
                </div>
            </fieldset>
            <div class="mb-3">
                <label for="exampleInputMessage" class="form-label">Message</label>
                <textarea class="form-control" id="exampleInputMessage" rows="3" name="message" required></textarea>
            </div>
            <button onclick="" id="btn-submit-contact" name="submit" type="submit" class="btn btn-primary d-block">Send Message</button>
        </form>
    </section>

    <footer>
        <h1>©2023 Stpehen, All Rights Reserved.</h1>
    </footer>
</body>
</html>