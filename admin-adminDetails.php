
<?php
    include "function.php";
    $result = displayLoginData();
?>
<?php
    include "connection.php";

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password1 = $_POST['password'];

        $stmt = $conn->prepare("INSERT INTO logindata (username,password) VALUES (?,?)");
        $stmt->bind_param("ss", $username, $password1);
        
        if($stmt->execute()){
            // close php tag
            header("Location: admin-adminDetails.php");
        }

        $stmt->close();
        $conn->close();
    }

    if(isset($_GET['id'])){

        $id=$_GET['id'];
        deleteAdmin($id);
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-adminDetails.css">
    <title>Document</title>
</head>
<body>
    
    <section>
        <div class="content-body">
        <h1>Admin Details</h1>
        <div class="line"></div>

        <div class="form-container">
                <h2>Add New User</h2>
                <form method="post">
                    <div class="field">
                        <label for="username">Username :</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="field">
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password">   
                    </div>
                    <div class="btn-field"><button type="submit" name="submit">Add</button></div>
                </form>
        </div>

            <div class="scroll">
                <table>
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
    
                    <!-- get data from db and saves it in result variable in while loop-->
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
    
                    <!-- open tr tag to display retrieved data -->
                    <tr>  
                            <!-- display user id -->
                            <td><?php echo $row['Id']; ?> </td>
    
                            <!-- display user name -->
                            <td><?php echo $row['username']; ?> </td>
    
                            <!-- display user password -->
                            <td><?php echo $row['password']; ?> </td>
                            <td>
                                <?php
                                    print('<a href="admin-adminUpdate.php?id=' .$row['Id']. '" class="action-link update">Update</a>');
                                    print('<a href="admin-adminDetails.php?id=' .$row['Id']. '" class="action-link delete">Delete</a>');
                                ?>
                            </td>
                            
                    <!-- close tr tag -->
                    </tr>
    
                    <!-- close php while loop -->
                    <?php
                        }
                    ?>
    
                </table>
            </div>
            
        </div>

    </section>
    <a href="dashboard.html" class="back">back to dashboard</a>
</body>
</html>

