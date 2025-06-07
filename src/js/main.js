
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
                <img class="feetImg" src="/src/img/${data.image}" alt="${data.imageAlt}" srcset="">
            </div>

   `
        document.getElementById("story").innerHTML = carasoleData;
    })
    .catch(error => console.error("Error loading data:", error));
