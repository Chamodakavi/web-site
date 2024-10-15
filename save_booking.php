<?php
// Database connection details
include "connection.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $full_name = $conn->real_escape_string($_POST['full-name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $event_type = $conn->real_escape_string($_POST['event-type']);
    $guests = (int)$_POST['guests'];
    $hall_type = $conn->real_escape_string($_POST['hall-type']);
    $event_date = $conn->real_escape_string($_POST['date']);
    $additional_requirements = $conn->real_escape_string($_POST['comments']);

    // SQL query to insert form data into the database
    $sql = "INSERT INTO hall_bookings (full_name, email, phone, event_type, guests, hall_type, event_date, additional_requirements)
            VALUES ('$full_name', '$email', '$phone', '$event_type', $guests, '$hall_type', '$event_date', '$additional_requirements')";

if ($conn->query($sql) === TRUE) {
    echo "<div class='message success'>Your booking has saved successfully. One of our staff member will contact you soon. Thank You.</div>";
    echo "<div class='redirect-btn'>
                <a
                  class='view-btn button border'
                  href='./index.html'
                  tabindex='0'
                  role='button'
                  data-popup='popup-5'
                  >Back To Home Page</a
                >
              </div>";
} else {
    echo "<div class='message error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
}
}

// Close the database connection
$conn->close();
?>

<!-- Styles for the success and error messages -->
<style>
    .message {
        margin: 20px auto;
        padding: 10px;
        width: 50%;
        text-align: center;
        font-size: 18px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
    .error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
    .redirect-btn{
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        display: flex;
        justify-content: center;
    }
    .redirect-btn a{
        color: white;
        text-decoration: none;
    }
</style>