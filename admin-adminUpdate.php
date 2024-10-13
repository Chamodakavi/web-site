
<?php
    include "function.php";


    if(isset($_GET['id']))
    {

    $id=$_GET['id'];

     $result=mysqli_query($conn,"SELECT * FROM logindata WHERE Id ='$id'");
     $row = mysqli_fetch_assoc($result);
    }


    if(isset($_POST['update'])){

        $id = $_POST['id']; 
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("UPDATE logindata SET username=?, password=? WHERE Id=?");
        $stmt->bind_param("ssi", $username, $password, $id);
        
        if($stmt->execute()){
            // close php tag
            header("Location: admin-adminDetails.php");
        }

        $stmt->close();
        $conn->close();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-adminUpdate.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="content-body">
            <h1>Admin Update Details</h1>
            <div class="line"></div>

            <div class="form-container">
                <h2>Update User</h2>
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $row['Id']; ?>"> 
                    <div class="field">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" value="<?php echo $row['username']; ?>">
                    </div>
                    <div class="field">
                        <label for="password">Password : </label>
                        <input type="text" name="password" id="password" value="<?php echo $row['password']; ?>">   
                    </div>
                    <div class="btn-field"><button type="submit" name="update" class="updateBtn">Update</button></div>
                </form>
            </div>
   
        </div>
    </section>
    <a href="dashboard.html" class="back">back to dashboard</a>
</body>
</html>

