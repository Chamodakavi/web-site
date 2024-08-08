//clear username and password when click back button
window.onload = function() {
    document.getElementById("Username").value = "";
  };
  


//validate username and password
function validate(){

    var username = document.getElementById("Username");
    var password = document.getElementById("Password");

        if(username.value.trim() == "" || password.value.trim() == ""){
            alert("Enter valid Username and Password");
            username.value = "";
            password.value = "";
            return false;
        }else{
            username.value = "";
            password.value = "";
            return true;
        }

}
