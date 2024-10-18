
const openModalBtn2 = document.getElementById('register');
const closeModalBtn = document.getElementById('closeModalBtn');

const form = document.getElementById('form-container');



openModalBtn2.addEventListener('click', function() {
    form.classList.add('show');
});

closeModalBtn.addEventListener('click', function() {
    form.classList.remove('show');
});

const nameRegex = /^[A-Za-z\s]+$/; 
const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; 
const phoneRegex = /^0\d{9}$/;
const subjectRegex = /^.{1,100}$/; 

function validate(){

    var fname = document.getElementById("name").value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('telephone').value;
    var address = document.getElementById("address").value;

        if(nameRegex.test(fname)&& emailRegex.test(email)&& phoneRegex.test(phone)&&subjectRegex.test(address)){
            return true;
        }else{
            alert("Enter valid Details");
            return false;
        }

    

};