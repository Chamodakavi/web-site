
<?php
    include "function.php";
    $result = displayLoginData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-contactUs.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="content-body">
        <h1>Message Review</h1>
        <div class="line"></div>
            <div class="scroll">
                <table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Subject</th>
                        <th>Message</th>
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
</body>
</html>

