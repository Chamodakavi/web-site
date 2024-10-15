

function validate(){

    var fname = document.getElementById("f-name");
    var lname = document.getElementById("l-name");

        if(fname.value.trim() === "" || lname.value.trim() === ""){
            alert("Enter valid Username and Password");
            return false;
        }else{
            return true;
        }

}

// function submit() {

//     let x = validate();

//     if (!x) {
      
//       // Form is invalid, disable submit button and show error
//       document.getElementById("submit").disabled = true;
//       alert("cannot submit");
//       return false; // Prevent form submission
//     } else {
//       // Form is valid, you can submit it here
//       // For example:
//       // document.myForm.submit(); // Assuming your form has the name "myForm"
//       return true; // Allow form submission
//     }
//   }