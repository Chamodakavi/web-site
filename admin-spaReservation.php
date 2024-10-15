
<?php
    include "function.php";
    $result = displaySpaReservations();
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
        <h1>Spa Reservations</h1>
        <div class="line"></div>
            <div class="scroll">

                <!-- ------------------scroll body -------------------------->
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Service</th>
                        <th>Date</th>
                    </tr>
    
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>  
                    <td><?php echo $row['name']; ?> </td>
                    <td><?php echo $row['email']; ?> </td>
                    <td><?php echo $row['service']; ?> </td>
                    <td><?php echo $row['date']; ?> </td>
                    </tr>

                    <?php
                        }
                    ?>
    
                </table>  





                <!-- ------------------scroll body -------------------------->


            </div>
        </div>
    </section>
    <a href="dashboard.html" class="back">back to dashboard</a>
</body>
</html>

