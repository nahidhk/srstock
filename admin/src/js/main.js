console.log("Main script loaded");
function logouti(){
    sessionStorage.clear();
    window.location.reload();
}

function openpopup(loaddata){
    const popup = document.getElementById(loaddata);
    popup.classList.remove("removePopup");
    popup.style.display = "flex";
}

function closepopup(loaddata){
    const popup = document.getElementById(loaddata);
    popup.classList.add("removePopup");
    setTimeout(() => {
        popup.style.display = "none";
    }, 300);
}
