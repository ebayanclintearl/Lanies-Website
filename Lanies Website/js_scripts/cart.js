//update the each cart total in cart.php
updateCartTotal();
function updateCartTotal() {
    const price = document.querySelectorAll("tbody > tr > td.price");
    const quantity = document.querySelectorAll("tbody > tr > td.quantity > #quantityInput");
    const total = document.querySelectorAll("tbody > tr > td.total");

    for(let i = 0; i < total.length; i++) {
        let priceInt = parseInt(price[i].textContent.replace(/[^0-9.]/g, ""));
        let quantityInt = parseInt(quantity[i].value);
        total[i].innerHTML = "<span>₱</span>" + (priceInt * quantityInt) + ".00";
    }
    updateSubTotal()
}
// update the subtotal in cart.php
updateSubTotal();
function updateSubTotal() {
    const total = document.querySelectorAll("tbody > tr > td.total");
    const subTotal = document.querySelector('#sub-total');

    let productTotal = 0;
    for(let i = 0; i < total.length; i++){
        productTotal = productTotal + parseInt(total[i].innerText.replace(/[^0-9.]/g, ""));
    }
    subTotal.innerHTML = "<span>₱</span>" + productTotal + ".00"; 
}