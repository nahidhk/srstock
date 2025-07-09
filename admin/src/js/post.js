console.log("Post.js loaded");

function updatesize() {
    const selectedSizes = [];
    const checkboxes = document.querySelectorAll('.size-option');

    checkboxes.forEach(cb => {
        if (cb.checked) {
            selectedSizes.push(cb.value);
        }
    });

    const result = {
        size: selectedSizes
    };

    document.getElementById("size").value = JSON.stringify(result);
}



// add imge 

const uploadContainer = document.getElementById('uploadContainer');
const addMoreBtn = document.getElementById('addMoreBtn');
const photosInput = document.getElementById('photos');


function createUploadPair(index) {
    const div = document.createElement('div');
    div.classList.add('uploadPair');
    div.style.marginTop = "10px";

    const label = document.createElement('label');
    label.style.cursor = "pointer";


    const upbox = document.createElement('div');
    upbox.classList.add('upbox');
    upbox.innerHTML = `<i class="upicon fa-solid fa-cloud-arrow-up"></i> <span class="uptxt">upload image</span>`;


    const colorInput = document.createElement('input');
    colorInput.type = "text";
    colorInput.name = `img${index}color`;
    colorInput.placeholder = "Image Color";
    colorInput.required = true;
    colorInput.classList.add('inputimgcolor');


    const fileInput = document.createElement('input');
    fileInput.type = "file";
    fileInput.accept = "image/*";
    fileInput.name = `img${index}`;
    fileInput.required = true;
    fileInput.style.display = "none";
    fileInput.classList.add('fileinput');


    fileInput.addEventListener('change', () => {
        if (fileInput.files.length > 0) {
            const file = fileInput.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                upbox.innerHTML = `<div class="upbox"><img src="${e.target.result}" style="max-width:100px; max-height:100px; object-fit:cover; border:1px solid #ccc; border-radius:8px;"></div>`;
            };

            reader.readAsDataURL(file);
        }

        updatePhotosInput();
    });


    upbox.addEventListener('click', () => fileInput.click());

    label.appendChild(upbox);
    label.appendChild(colorInput);
    label.appendChild(fileInput);
    div.appendChild(label);

    return div;
}



let uploadCount = 1;


addMoreBtn.addEventListener('click', () => {
    uploadCount++;
    const newUploadPair = createUploadPair(uploadCount);
    uploadContainer.appendChild(newUploadPair);
});


function updatePhotosInput() {
    const pairs = uploadContainer.querySelectorAll('.uploadPair');
    const photosArr = [];

    pairs.forEach(pair => {
        const colorInput = pair.querySelector('input[type="text"]');
        const fileInput = pair.querySelector('input[type="file"]');

        if (fileInput.files.length > 0 && colorInput.value.trim() !== '') {

            photosArr.push({
                photo: fileInput.files[0].name,
                color: colorInput.value.trim()
            });
        }
    });

    photosInput.value = JSON.stringify(photosArr);
}


uploadContainer.addEventListener('change', updatePhotosInput);



function calculateDiscount() {
    const price = document.getElementById("productprice").value;
    const discount = document.getElementById("productdiscount").value;
    const discountPrice = document.getElementById("productdiscountamount");
    const discountAmount = price - (price * discount) / 100;
    discountPrice.value = discountAmount;

}

