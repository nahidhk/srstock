
function qtyoption(action) {
    const qtyInput = document.getElementById("qty");
    let currentValue = parseInt(qtyInput.value);

    if (action === "increase") {
        currentValue++;
    } else if (action === "decrease" && currentValue > 1) {
        currentValue--;
    }

    qtyInput.value = currentValue;
}

function imgcall(imgdata){
    const mainPhoto = document.getElementById("mainPhoto");
    mainPhoto.src = "/admin/dash/upload/uploads/" + imgdata.img;
    document.getElementById("productimg").value = imgdata.img;
    document.getElementById("color").value = imgdata.color;
    const colorbutton = document.getElementsByClassName("btnio");
    for (let i = 0; i < colorbutton.length; i++) {
        colorbutton[i].classList.remove("active");
    }
    const colorbtn = document.getElementById("color-" + imgdata.color);
    if (colorbtn) {
        colorbtn.classList.add("active");
    }
    const siblings = colorbtn.parentNode.children;
    for (let i = 0; i < siblings.length; i++) {
        if (siblings[i] !== colorbtn) {
            siblings[i].classList.remove("active");
        }
    }
    
}
function openSizeSelector(el, size) {
    document.getElementById("sixe").value = size;
    el.classList.add("active");
    const siblings = el.parentNode.children;
    for (let i = 0; i < siblings.length; i++) {
        if (siblings[i] !== el) {
            siblings[i].classList.remove("active");
        }
    }   
}
