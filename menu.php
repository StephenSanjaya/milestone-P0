<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './template/header.php'; ?>
</head>
<body>
    <?php include './template/navbar.php' ?>

    <section id="menu-section">
        <div class="menu-image">
            <img id="idImg" src="./asset/image/food1.jpg" class="img-fluid" alt="food1-img">
            <h1 id="menu-title">
                le cous aksdnla
            </h1>
        </div>
        <div class="menu-selection">
            <select id="selectOption" class="form-select" aria-label="Default select example" onchange="renderImage()">
                <option selected="selected" value="1">menu 1</option>
                <option value="2">menu 2</option>
                <option value="3">menu 3</option>
            </select>
            <select class="form-select" aria-label="Default select example">
                <option value="1">1 person</option>
                <option value="2">2 person</option>
                <option value="3">3 person</option>
                <option value="4">4 person</option>
                <option value="5">5 person</option>
                <option value="6">6 person</option>
                <option value="7">7 person</option>
            </select>
        </div>
    </section>

    <!-- <?php include './template/footer.php' ?> -->

    <script src="./asset/js/script.js"></script>
</body>
</html>