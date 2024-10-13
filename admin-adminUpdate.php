
<?php
    include "function.php";
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
                    <div class="field">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="field">
                        <label for="password">Password : </label>
                        <input type="password" name="password" id="password">   
                    </div>
                    <div class="btn-field"><button type="submit" name="submit" class="updateBtn">Update</button></div>
                </form>
            </div>
   
        </div>
    </section>
    <a href="dashboard.html" class="back">back to dashboard</a>
</body>
</html>

