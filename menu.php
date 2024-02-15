<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './template/header.php'; ?>
</head>
<body onload="initMenu()">
    <?php include './template/navbar.php' ?>

    <section id="menu-section">
        <div class="menu-image">
            <img id="idImg" src="" class="img-fluid" alt="food1-img">
            <h1 id="menu-name"></h1>
        </div>
        <div class="menu-selection">
            <select id="selectOptionMenu" class="form-select" aria-label="Default select example" onchange="renderMenu()">
                <option selected value="1">Menu 1</option>
                <option value="2">Menu 2</option>
                <option value="3">Menu 3</option>
            </select>
            <select id="selectOptionPerson" class="form-select" aria-label="Default select example" onchange="renderPerson()">
                <option selected value="1">1 Person</option>
                <option value="2">2 Person</option>
                <option value="3">3 Person</option>
                <option value="4">4 Person</option>
                <option value="5">5 Person</option>
                <option value="6">6 Person</option>
                <option value="7">7 Person</option>
            </select>
        </div>
        <div class="calc-price">
        <table class="table borderless">
            <thead>
                <tr>
                    <th scope="col">Menu</th>
                    <th scope="col">Total Person</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="tbl-menu-name"></td>
                    <td id="tbl-menu-person"></td>
                    <td id="tbl-menu-price"></td>
                </tr>
            </tbody>
            </table>
        </div>
        <div id="btn-book">
            <button type="button" class="btn btn-success w-100">Book</button>
        </div>
    </section>

    <?php include './template/footer.php' ?>

    <script src="./asset/js/script.js"></script>
</body>
</html>