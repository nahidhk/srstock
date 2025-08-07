
console.log("main.js loaded");

function closepopup(loaddata) {
    document.getElementById(loaddata).style.display = "none";
}
function openpopup(loaddata) {
    document.getElementById(loaddata).style.display = "flex";
}




// Tools function of backend by Nahid TDX 

fetch('/tools/data/srs_pp_code.json')
    .then(response => response.json())
    .then(data => {
        const carasoleData = `

    <div class="padding flex center wrap row mw30">
                <div class="underline">${data.title}</div>
                <p class=" summary">${data.summary}</p>
               <div class="text-center">
                <button onclick="location.href='${data.link}'" class="btn black-btn cont">
                    ${data.btnName} &nbsp;
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
                </div>
     </div>

            <div class="flex medel around mw50">
                <img loading="lazy" class="feetImg" src="/src/img/${data.image}" alt="${data.imageAlt}" srcset="">
            </div>

   `
        document.getElementById("story").innerHTML = carasoleData;
    })
    .catch(error => console.error("Error loading data:", error));





    function addToCart(productId) {
        // Simulate adding to cart
        window.location.href = `/cart/index.php?productId=${productId}`;
    }





function zoomIn(element) {
    const img = element.querySelector('img');
    element.style.cursor = 'zoom-out';
    
    // Calculate zoom level based on image and container size
    const zoomLevel = 2; // Adjust as needed (2 = 200% zoom)
    
    element.addEventListener('mousemove', function(e) {
        // Get mouse position relative to the element
        const rect = element.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        // Calculate percentage position
        const xPercent = (x / rect.width) * 100;
        const yPercent = (y / rect.height) * 100;
        
        // Apply transform
        img.style.transformOrigin = `${xPercent}% ${yPercent}%`;
        img.style.transform = `scale(${zoomLevel})`;
    });
}

function zoomOut(element) {
    const img = element.querySelector('img');
    img.style.transform = 'scale(1)';
    img.style.transformOrigin = 'center center';
    element.style.cursor = 'zoom-in';
    
    // Remove mousemove event listener to improve performance
    element.replaceWith(element.cloneNode(true));
}