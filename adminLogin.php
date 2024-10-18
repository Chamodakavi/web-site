<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminLogin.css">
    <title>Document</title>
</head>
<body>
    <img src="images/2690572.jpg" alt="" srcset="">
    <div class="login-container">
        <div class="login">
            <form onsubmit="return validate()" method="post">
                <h1>Welcome Back :)</h1> 
                <label for="Username" class="lab">User Name: </label> <br>
                <input type="text" placeholder="" name="Username" id="Username" required>
                <br>
                <label for="Password" class="lab">Password: </label> <br>
                <input type="password" placeholder="" name="Password" id="Password" required>
                <br>
                <button type="submit" id="loginBtn">Login</button>
            </form>
        </div>
    </div>
    
    <a href="index.php"><button type="button" class="backBtn">Back to home</button></a>
    <script src="adminLogin.js"></script>
</body>
</html>


<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $enteredUsername = $_POST["Username"];
  $enteredPassword = $_POST["Password"];

  // Prepare and execute SQL statement
  $stmt = $conn->prepare("SELECT * FROM logindata WHERE username = ? AND password = ?");
  $stmt->bind_param("ss", $enteredUsername, $enteredPassword);
  $stmt->execute();
  $result = $stmt->get_result();

  // Check if user exists
  if ($result->num_rows > 0) {
    // Redirect to the next page
    header("Location: dashboard.html");

    exit;
  } else {

    ?> 

            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            <script>
            
            swal("Error", "INVALID CREDENTIALS", "error");
            
            </script>


            <!-- open php tag again. -->
            <?php
  }

  $stmt->close();
}

$conn->close();
?>
