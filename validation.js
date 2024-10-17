

// Regular Expressions
const nameRegex = /^[A-Za-z\s]+$/; 
const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; 
const phoneRegex = /^0\d{9}$/;
const subjectRegex = /^.{1,100}$/; 
const messageRegex = /^.{1,500}$/;

// Validation function for individual fields
function validateField(input, regex) {
    const tick = input.nextElementSibling;
    const cross = tick.nextElementSibling;

    if (regex.test(input.value)) {
        tick.classList.add("show");
        cross.classList.remove("show");
    } else {
        tick.classList.remove("show");
        cross.classList.add("show");
    }
}

var fname = document.getElementById("full-name");
var email = document.getElementById('email');
var phone = document.getElementById('phone');

// Add event listeners for input fields
fname.addEventListener("input", () => {
    validateField(fname, nameRegex);
});

email.addEventListener("input", () => {
    validateField(email, emailRegex);
});

phone.addEventListener("input", () => {
    validateField(phone, phoneRegex);
});


function validate(){

    var fname = document.getElementById("full-name").value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;


        if(nameRegex.test(fname)&& emailRegex.test(email)&& phoneRegex.test(phone)){
            return true;
        }else{
            alert("Enter valid Details");
            return false;
        }
};