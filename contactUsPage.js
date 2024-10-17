

// Regular Expressions
const nameRegex = /^[A-Za-z\s]+$/; 
const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; 
const phoneRegex = /^0\d{9}$/;
const subjectRegex = /^.{1,100}$/; 
const messageRegex = /^.{1,500}$/;

var fname = document.getElementById("f-name");
var lname = document.getElementById("l-name");
var email = document.getElementById('email');
var phone = document.getElementById('tp');
var subject = document.getElementById('subject');
var message = document.getElementById('message');

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

// Add event listeners for input fields
fname.addEventListener("input", () => {
    validateField(fname, nameRegex);
});

lname.addEventListener("input", () => {
    validateField(lname, nameRegex);
});

email.addEventListener("input", () => {
    validateField(email, emailRegex);
});

phone.addEventListener("input", () => {
    validateField(phone, phoneRegex);
});

subject.addEventListener("input", () => {
    validateField(subject, subjectRegex);
});

message.addEventListener("input", () => {
    validateField(message, messageRegex);
});


function validate(){

        var fname = document.getElementById("f-name").value;
        var lname = document.getElementById("l-name").value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('tp').value;
        var subject = document.getElementById('subject').value;
        var message = document.getElementById('message').value;
    
    
            if(nameRegex.test(fname) && nameRegex.test(lname)&& emailRegex.test(email)&& phoneRegex.test(phone)&& subjectRegex.test(subject)&& messageRegex.test(message)){
                return true;
            }else{
                alert("Enter valid Details");
                return false;
            }
};
