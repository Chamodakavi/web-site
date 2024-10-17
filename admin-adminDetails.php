<?php
    include "function.php";
    $result = displayLoginData();
?>
<?php
    include "connection.php";

    // Handle form submission for adding new user
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password1 = $_POST['password'];

        $stmt = $conn->prepare("INSERT INTO logindata (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password1);
        
        if ($stmt->execute()) {
            header("Location: admin-adminDetails.php"); // Redirect after successful insertion
        }

        $stmt->close();
        $conn->close();
    }

    // Handle delete request
    if (isset($_GET['id']) && isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
        $id = $_GET['id'];
        deleteAdmin($id);  // Call the deleteAdmin function
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-adminDetails.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Admin Details</title>
</head>
<body>

    <section>
        <div class="content-body">
        <h1>Admin Details</h1>
        <div class="line"></div>

        <div class="form-container">
                <h2>Add New User</h2>
                <form method="post" onsubmit="return validate()">
                    <div class="field">
                        <label for="username">Username :</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="field">
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password" required>   
                    </div>
                    <div class="btn-field"><button type="submit" name="submit">Add</button></div>
                </form>
                <div class="password">
                    <p>Password should contain atleast 6 characters.</p>
                    <p>Password should contain atleast one Symbol.</p>
                    <p>Password should contain Uppercase letter at the beggining.</p>
                    <p>Password should contain atleast two numbers.</p>
                </div>
        </div>

        <div class="scroll">
            <table>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>

                <!-- Display data from DB -->
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>  
                        <td><?php echo $row['Id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td>
                            <a href="admin-adminUpdate.php?id=<?php echo $row['Id']; ?>" class="action-link update">Update</a>
                            <a href="#" class="action-link delete" onclick="confirmDelete(<?php echo $row['Id']; ?>)">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        </div>
    </section>
    <a href="dashboard.html" class="back">Back to Dashboard</a>

    <script>
        // Function to show SweetAlert confirmation dialog before deleting
        function confirmDelete(id) {
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // Redirect to PHP for deletion with confirm=true
                    window.location.href = "admin-adminDetails.php?id=" + id + "&confirm=true";
                } 
            });
        }
    </script>
    <script src="admin-adminDetails.js"></script>
</body>
</html>
