var price="";
function initMenu() {
    var imgUrl = "./asset/image/food1.jpg";
    var name = "le cous aksdnla";
    var person = 1;
    price = 300000;
    var totalPrice = person * price;

    document.getElementById("idImg").src = imgUrl;
    document.getElementById("menu-name").innerHTML = name;
    document.getElementById("tbl-menu-name").innerHTML = name;

    document.getElementById("tbl-menu-price").innerHTML = "Rp. " + totalPrice.toString();
    document.getElementById("tbl-menu-person").innerHTML = person;
}

function renderMenu() {
    var selected = document.getElementById("selectOptionMenu");
    var imgUrl = "";
    var name = "";
    price = "";
    if (selected.value == 1) {
        imgUrl = "./asset/image/food1.jpg";
        name = "le cous aksdnla";
        price = 300000;
    } else if (selected.value == 2) {
        imgUrl = "./asset/image/food2.jpg";
        name = "le cous mvcmvncmv";
        price = 500000;
    } else if (selected.value == 3) {
        imgUrl = "./asset/image/food3.jpg";
        name = "le cous wqweqweqw";
        price = 700000;
    }

    document.getElementById("idImg").src = imgUrl;
    document.getElementById("menu-name").innerHTML = name;
    document.getElementById("tbl-menu-name").innerHTML = name;

    renderPerson();
}

function renderPerson() {
    var selected = document.getElementById("selectOptionPerson");
    var person = selected.value;
    var totalPrice = person * price;

    document.getElementById("tbl-menu-price").innerHTML = "Rp. " + totalPrice.toString();
    document.getElementById("tbl-menu-person").innerHTML = person;
}