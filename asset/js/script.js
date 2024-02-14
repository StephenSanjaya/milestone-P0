function renderImage() {
    var selected = document.getElementById("selectOption");
    var imgUrl = "";
    var title = "";
    if (selected.value == 1) {
        imgUrl = "./asset/image/food1.jpg";
        title = "le cous aksdnla";
    } else if (selected.value == 2) {
        imgUrl = "./asset/image/food2.jpg";
        title = "le cous mvcmvncmv";
    } else if (selected.value == 3) {
        imgUrl = "./asset/image/food3.jpg";
        title = "le cous wqweqweqw";
    }

    console.log(imgUrl);

    document.getElementById("idImg").src = imgUrl;
    document.getElementById("menu-title").innerHTML = title;
}
