// Main Validation
function check() {
  password = document.getElementById('password').value;
  username = document.getElementById('username').value;
  clearErrors();

  if (document.getElementById('username').value == '') {
    seterror('name', '*username should not be blank');
    returnval = false;
    document.getElementById('username').focus();
  } else {
    returnval = true;
  }

  if (returnval == true) {
    if (document.getElementById('password').value == '') {
      seterror('password1', '*password should not be blank');
      returnval = false;
      document.getElementById('password').focus();
    } else if (document.getElementById('password').value != 'bmsce') {
      seterror('password1', '*password is incorrect');
      returnval = false;
      document.getElementById('password').focus();
    } else{
      returnval = true;
    }
  }

  if (returnval == true) {
    alert("You are logged in!");
 sessionStorage.setItem('username', username);
    window.location = 'index.html';
  }
}

// Clear error messages
function clearErrors() {
  errors = document.getElementsByClassName('formerror');
  for (let item of errors) {
    item.innerHTML = '';
  }
}

function togglePassword() {
  var passwordField = document.getElementById("password");
  var passwordToggle = document.getElementById("password-toggle");
  if (passwordField.type === "password") {
    passwordField.type = "text";
    passwordToggle.innerHTML = "Hide";
  } else {
    passwordField.type = "password";
    passwordToggle.innerHTML = "Show";
  }
}

// Populate error containers
function seterror(id, error) {
  //sets error inside tag of id
  element = document.getElementById(id);
  element.getElementsByClassName('formerror')[0].innerHTML = error;
}


function showOrderReceived() {
   const username = sessionStorage.getItem('username');
    alert(username + " your order is received\nThank You!");
}



function withoutlogin() {
  alert("You must be logged in to place order!");
}