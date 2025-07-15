
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
