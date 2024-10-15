
<?php
    include "function.php";
    $result = displayRoomReservations();
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
        <h1>Room Reservations</h1>
        <div class="line"></div>
            <div class="scroll">

                <!-- ------------------scroll body -------------------------->

                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Check-in Date</th>
                        <th>Check-out Date</th>
                        <th>Number of Guests</th>
                        <th>Room Type</th>
                    </tr>
    
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>  
                    <td><?php echo $row['name']; ?> </td>
                    <td><?php echo $row['email']; ?> </td>
                    <td><?php echo $row['checkin']; ?> </td>
                    <td><?php echo $row['checkout']; ?> </td>
                    <td><?php echo $row['guests']; ?> </td>
                    <td><?php echo $row['Rname']; ?> </td>
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

