const deliveryForm = document.querySelector("#deliveryForm");
const fname = document.querySelector("#fname");
const lname = document.querySelector("#lname");
const mobileNumber = document.querySelector("#mobileNumber");
const email = document.querySelector("#email");
const address1 = document.querySelector("#address1");
const address2 = document.querySelector("#address2");
const city = document.querySelector("#city");
const zipCode = document.querySelector("#zipCode");

deliveryForm.addEventListener('submit', (e) => {
    let errorMessages = [];

    
    if(isEmptyFields(fname)) {
        errorMessages.push("first name is required");
        fname.style.borderColor = "red";
    } else {
        fname.style.borderColor = "green";
    }
    if(isEmptyFields(lname)) {
        errorMessages.push("last name is required");
        lname.style.borderColor = "red";
    } else {
        lname.style.borderColor = "green";
    }
    if(isEmptyFields(mobileNumber)) {
    errorMessages.push("mobile is required");
    mobileNumber.style.borderColor = "red";
    } else {
    mobileNumber.style.borderColor = "green";
    }
    if(isEmptyFields(email)) {
        errorMessages.push("email is required");
        email.style.borderColor = "red";
    } else {
    email.style.borderColor = "green";
    }
    if(!validateEmail(email.value)) {
    errorMessages.push("email is invalid");
    email.style.borderColor = "red";
    } else {
    email.style.borderColor = "green";
    }
    if(isEmptyFields(address1)) {
    errorMessages.push("address 1 is required");
    address1.style.borderColor = "red";
    } else {
    address1.style.borderColor = "green";
    }
    if(isEmptyFields(address2)) {
    errorMessages.push("address 2 is required");
    address2.style.borderColor = "red";
    } else {
    address2.style.borderColor = "green";
    }
    if(isEmptyFields(city)) {
    errorMessages.push("City/Municipality is required");
    city.style.borderColor = "red";
    } else {
    city.style.borderColor = "green";
    }
    if(isEmptyFields(zipCode)) {
    errorMessages.push("zip code is required");
    zipCode.style.borderColor = "red";
    } else {
    zipCode.style.borderColor = "green";
    }

    if (errorMessages.length > 0) {
        e.preventDefault()
        alert(errorMessages.join(', '));
    } else {
        alert("Order Successful!");
        alert("Here's your tracking Number: " + trackingNumber("LANIES", "PH"));
    }
});

function isEmptyFields(element) {
    if(element.value === "" || element.value == "null") {
        return true;
    }
    return false;
}

function validateEmail(email) {
    let re = /\S+@\S+\.\S+/;
    return re.test(email);
}

const trackingNumber = (prefix = "LAN", suffix = "PH") => {
    for(let i=0; i<5; i++) prefix += ~~(Math.random() * 10);
    return prefix + suffix;
};