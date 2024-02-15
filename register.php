<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './template/header.php'; ?>
</head>
<body>
    <?php include './template/navbar.php' ?>

    <section id="form-section">
        <div class="form-title">
            <h1>Register</h1>
        </div>
        <form method="" action="">
            <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputUsername" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputConfPass" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputConfPass" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" required class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I accept all terms & condition</label>
            </div>
            <button id="btn-register" type="submit" class="btn btn-primary d-block">Reigster</button>
            <div class="sign-up-link">
                <p>Already have an account? <a href="./login.php">Login now</a></p>
            </div>
        </form>
    </section>

    <?php include './template/footer.php' ?>
</body>
</html>