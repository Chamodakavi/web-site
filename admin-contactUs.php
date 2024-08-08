
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
            <table>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Password</th>
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
    </section>
</body>
</html>