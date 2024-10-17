const passwordRegex = /^(?=.*[A-Z])(?=.*\d.*\d)(?=.*[!@#$%^&*()]).{6,}$/;
const usernameRegex = /^[a-zA-Z0-9_]+$/; 

function validate() {
  const password = document.getElementById("password").value;
  const username = document.getElementById("username").value;

  if (passwordRegex.test(password) && usernameRegex.test(username)) {
    return true; // Password and username are valid, allow form submission
  } else {
    alert("Please enter a valid password and username.");
    return false; // Prevent form submission
  }
}