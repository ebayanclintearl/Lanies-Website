const email = document.querySelector("#email");
const password = document.querySelector("#password");
const login= document.querySelector("#loginForm");
const error = document.querySelector('.err-msg');
//get the url variable value
let url = {
params: new Proxy(new URLSearchParams(window.location.search), {
    get: (searchParams, prop) => searchParams.get(prop),
})
}

if(url.params.error !== null) {
error.classList.add("active");
error.textContent = url.params.error;
} else {
error.classList.remove("active");
}

login.addEventListener('submit', (e) => {
    let errorMessages = [];
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
    if(isEmptyFields(password)) {
        errorMessages.push('password is required');
        password.style.borderColor = "red";
    } else {
        password.style.borderColor = "green";
    }

    if (errorMessages.length > 0) {
        e.preventDefault()
        error.classList.add("active");
        error.textContent = errorMessages.join(', ');
    } else {
        error.classList.remove("active");
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