<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './template/header.php'; ?>
</head>
<body>
    <?php include './template/navbar.php' ?>

    <section id="form-section">
        <div class="form-title">
            <h1>Contact Us</h1>
        </div>
        <form method="" action="">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name*</label>
                <div class="inpName-div">
                    <input type="text" class="form-control" id="exampleInputFn" placeholder="First name">
                    <input type="text" class="form-control" id="exampleInputLn" placeholder="Last name">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password*</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPhone" class="form-label">Phone*</label>
                <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" id="exampleInputPhone">
            </div>
            <fieldset disabled>
                <div class="mb-3">
                    <label for="exampleInputSubject" class="form-label">Message subject*</label>
                    <input type="text" class="form-control" id="exampleInputSubject" placeholder="Request">
                </div>
            </fieldset>
            <div class="mb-3">
                <label for="exampleInputMessage" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleInputMessage" rows="3"></textarea>
            </div>
            <button id="btn-submit-contact" type="submit" class="btn btn-primary d-block">Send Message</button>
        </form>
    </section>

    <?php include './template/footer.php' ?>
</body>
</html>