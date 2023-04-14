const contactForm = document.querySelector("#contactForm");
const fname = document.querySelector("#fname");
const lname = document.querySelector("#lname");
const email = document.querySelector("#email");
const message = document.querySelector("#message");

contactForm.addEventListener('submit', (e) => {
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

    if(isEmptyFields(message)) {
      errorMessages.push("message is required");
      message.style.borderColor = "red";
    } else {
      message.style.borderColor = "green";
    }

  if (errorMessages.length > 0) {
      e.preventDefault()
      alert(errorMessages.join(', '));
  } else {
      alert("Message Sent!");
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

