
const loginForm = document.getElementById("login-form");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");

loginForm.addEventListener("submit", function (event) {
  event.preventDefault();
  
  const emailValue = emailInput.value.trim();
  const passwordValue = passwordInput.value.trim();
  
  if (!isValidEmail(emailValue)) {
    setErrorFor(emailInput, "Please enter a valid email address.");
    return;
  } else {
    setSuccessFor(emailInput);
  }
  
  if (passwordValue === "") {
    setErrorFor(passwordInput, "Password cannot be empty.");
    return;
  } else {
    setSuccessFor(passwordInput);
  }
  
  alert("Logged in successfully!");
});

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const errorMessage = formControl.querySelector("small");
  
  errorMessage.innerText = message;
  formControl.className = "form-control error";
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = "form-control success";
}

function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}
