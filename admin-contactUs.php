
<?php
    include "function.php";
    $result = displayContactUsDetails();
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
    
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>  
                    <td><?php echo $row['fname']; ?> </td>
                    <td><?php echo $row['lname']; ?> </td>
                    <td><?php echo $row['email']; ?> </td>
                    <td><?php echo $row['tp']; ?> </td>
                    <td><?php echo $row['subject']; ?> </td>
                    <td><?php echo $row['message']; ?> </td>
                    </tr>

                    <?php
                        }
                    ?>
    
                </table>
            </div>
        </div>
    </section>
</body>
</html>

