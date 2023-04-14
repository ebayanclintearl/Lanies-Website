const add_products = document.querySelector(".add-products h1");
//validate form of add product
if(add_products.textContent === "Add Product") {
  const form = document.querySelector("#form");
  const choose_div = document.querySelector("#choose-file");
  const upload = document.querySelector("#upload");
  const product_name = document.querySelector("#product_name");
  const product_price = document.querySelector("#product_price");
  const product_quantity = document.querySelector("#product_quantity");
  const product_description = document.querySelector("#product_description");

  form.addEventListener('submit', (e) => {
      let errorMessages = [];

      if(isEmptyFields(upload)) {
          errorMessages.push("must select a image");
          choose_div.style.borderColor = "red";
      } else {
        choose_div.style.borderColor = "green";
      }
      if(isEmptyFields(product_name)) {
          errorMessages.push("product name is required");
          product_name.style.borderColor = "red";
      } else {
        product_name.style.borderColor = "green";
      }
      if(isEmptyFields(product_price)) {
          errorMessages.push("product price is required");
          product_price.style.borderColor = "red";
      } else {
        product_price.style.borderColor = "green";
      }
      if(isEmptyFields(product_quantity)) {
          errorMessages.push("product quantity is required");
          product_quantity.style.borderColor = "red";
      } else {
        product_quantity.style.borderColor = "green";
      }
      if(isEmptyFields(product_description)) {
          errorMessages.push("product description is required");
          product_description.style.borderColor = "red";
      } else {
        product_description.style.borderColor = "green";
      }

      if (errorMessages.length > 0) {
          e.preventDefault()
          alert(errorMessages.join(', '));
      } else {
          alert("Product Added Successfully!");
      }
  });
}

function isEmptyFields(element) {
    if(element.value === "" || element.value == "null") {
        return true;
    }
    return false;
}