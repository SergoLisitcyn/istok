$( document ).ready(function() {
    var type1 = document.getElementById("type1");
    var type2 = document.getElementById("type2");
    var type3 = document.getElementById("type3");
    var type4 = document.getElementById("type4");
    var number = document.getElementById("number");
    var name = document.getElementById("name");
    var imageId = document.getElementById("imageId");
    var desc = document.getElementById("desc");
    var price = document.getElementById("price");
    var url = document.getElementById("url");
    var list = document.getElementById("list");

    if(type1 && type1.checked){
        number.style.display = "none";
        name.style.display = "block";
        imageId.style.display = "none";
        desc.style.display = "none";
        price.style.display = "block";
        url.style.display = "none";
        list.style.display = "block";
    }

    if(type2 && type2.checked){
        number.style.display = "none";
        name.style.display = "block";
        imageId.style.display = "block";
        desc.style.display = "block";
        price.style.display = "block";
        url.style.display = "none";
        list.style.display = "none";
    }

    if(type3 && type3.checked){
        number.style.display = "block";
        name.style.display = "block";
        imageId.style.display = "none";
        desc.style.display = "block";
        price.style.display = "none";
        url.style.display = "none";
        list.style.display = "none";
    }

    if(type4 && type4.checked){
        number.style.display = "none";
        name.style.display = "block";
        imageId.style.display = "block";
        desc.style.display = "none";
        price.style.display = "none";
        url.style.display = "none";
        list.style.display = "none";
    }

});