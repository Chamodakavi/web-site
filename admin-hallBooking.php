
<?php
    include "function.php";
    $result = displayHallReservations();
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
        <h1>Hall Bookings</h1>
        <div class="line"></div>
            <div class="scroll">

                <!-- ------------------scroll body -------------------------->

                <table>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Event Type</th>
                        <th>Number of Guests</th>
                        <th>Hall Type</th>
                        <th>Date</th>
                        <th>Additional Requirement</th>
                    </tr>
    
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>  
                    <td><?php echo $row['full_name']; ?> </td>
                    <td><?php echo $row['email']; ?> </td>
                    <td><?php echo $row['phone']; ?> </td>
                    <td><?php echo $row['event_type']; ?> </td>
                    <td><?php echo $row['guests']; ?> </td>
                    <td><?php echo $row['hall_type']; ?> </td>
                    <td><?php echo $row['event_date']; ?> </td>
                    <td><?php echo $row['additional_requirements']; ?> </td>
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

