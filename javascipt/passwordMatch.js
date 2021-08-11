var signInForm = document.getElementById("signin_form");
var formName = document.getElementById("name");
var email = document.getElementById("email");
var password = document.getElementById("password");
var confirmPassword = document.getElementById("confirm_password");
var nameerrmsg = document.getElementById("nameerrmsg");
var emailerrmsg = document.getElementById("emailerrmsg");
var passErrMsg = document.getElementById("passerrmsg");

function handleForm(event) {
  if (
    formName.value == "" ||
    email.value == "" ||
    password.value == "" ||
    confirmPassword.value == ""
  ) {
    event.preventDefault();
    if (formName.value == "") {
      nameerrmsg.innerHTML = "Please insert an username";
      nameerrmsg.style.color = "#a83e32";
      formName.style.border = "0.1em solid #a83e32";
    } else {
      nameerrmsg.innerHTML = "";
      formName.style.border = "0.1em solid #1DB954";
    }
    if (email.value == "") {
      emailerrmsg.innerHTML = "Please insert an email";
      emailerrmsg.style.color = "#a83e32";
      email.style.border = "0.1em solid #a83e32";
    } else {
      emailerrmsg.innerHTML = "";
      email.style.border = "0.1em solid #1DB954";
    }
    if (password.value == "") {
      passErrMsg.innerHTML = "Please insert a password";
      passErrMsg.style.color = "#a83e32";
      password.style.border = "0.1em solid #a83e32";
      confirmPassword.style.border = "0.1em solid #a83e32";
    } else if (
      password.value != "" &&
      password.value !== confirmPassword.value
    ) {
      passErrMsg.innerHTML = "Passwords are not equal";
      passErrMsg.style.color = "#a83e32";
      confirmPassword.style.border = "0.1em solid #a83e32";
      password.style.border = "0.1em solid #1DB954";
    } else {
      passErrMsg.innerHTML = "";
      confirmPassword.style.border = "0.1em solid #1DB954";
      password.style.border = "0.1em solid #1DB954";
    }
  }
}

var passCheck = function () {};

formName.addEventListener("focusout", handleForm);
email.addEventListener("focusout", handleForm);
password.addEventListener("focusout", handleForm);
confirmPassword.addEventListener("focusout", handleForm);
signInForm.addEventListener("submit", handleForm);
