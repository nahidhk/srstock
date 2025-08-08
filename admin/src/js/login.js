// Install python and config JSON !
console.log("Login script loaded");

const youlogin = sessionStorage.getItem("login");

if (youlogin === "true") {
    // লগইন থাকলে কিছুই করবে না
} else {
    const elementcre = document.createElement("div");
    elementcre.style.cssText = `
        height: 100vh;
        width: 100vw;
        position: fixed;
        top: 0;
        left: 0;
        background: rgba(255, 255, 255, 1);
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: sans-serif;
        color: #333;
    `;
    elementcre.innerHTML = "[Request Declined Please login to continue]<br> [লগইন করতে অনুগ্রহ করে অপেক্ষা করুন]";
    document.body.appendChild(elementcre);
    
    setTimeout(() => {
        alert("Please login to continue");
        window.location.href = "/admin/";
    }, 1000);
}
