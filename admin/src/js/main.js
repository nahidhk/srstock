console.log("Main script loaded");
function logouti(){
    sessionStorage.clear();
    window.location.reload();
}

function urlcall(){
     const params = new URLSearchParams(window.location.search);
     const popup = params.get("popup");

     if (popup === "true") {
        callOnPopup(params.get("id"));
     }
     if (popup === "false") {
        callOffPopup(params.get("id"));
     }
}
urlcall()
function openpopup(loaddata){
    window.location.href = "?id=" + loaddata + "&popup=true";
}
function closepopup(loaddata){
    window.location.href = "?id=" + loaddata + "&popup=false";
}

function callOnPopup(loaddata){
    const popup = document.getElementById(loaddata);
    popup.classList.remove("removePopup");
    popup.style.display = "flex";  
}

function callOffPopup(loaddata){
    const popup = document.getElementById(loaddata);
    popup.classList.add("removePopup");
    setTimeout(() => {
        popup.style.display = "none";
    }, 300);
}
