const fname = document.querySelector("#fname");
const lname = document.querySelector("#lname");
const email = document.querySelector("#email");
const password = document.querySelector("#password");
const passwordRepeat = document.querySelector("#passwordRepeat");
const signup = document.querySelector("#signupForm");
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
} else if(url.params.success !== null) {
  error.classList.add("active");
  error.textContent = url.params.success;
  error.style.color = "green";
  error.style.backgroundColor = "#cdffcd";
  error.style.borderColor = "green";
} else {
  error.classList.remove("active");
}

signup.addEventListener('submit', (e) => {
  console.log(validateEmail(email.value));
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
  if(isEmptyFields(passwordRepeat)) {
    errorMessages.push('repeat password is required');
    passwordRepeat.style.borderColor = "red";
  } else {
    password.style.borderColor = "green";
  }

  if(password.value.length > 0 && password.value.length <= 7) {
    errorMessages.push('password must be longer than 8 characters');
    password.style.borderColor = "red";
  }
  
  if(password.value.length >= 20) {
    errorMessages.push('password must be less than 20 characters');
    password.style.borderColor = "red";
  }

  if(passwordRepeat.value !== password.value) {
    errorMessages.push('repeat password doesn\'t match');
    passwordRepeat.style.borderColor = "red";
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
