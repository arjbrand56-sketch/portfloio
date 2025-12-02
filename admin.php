<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'gloves';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {

    $admin_id = $_POST['admin_id'];
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];

    $checkIfAdminExists = "SELECT * FROM myglove LIMIT 1";
    $existingAdmin = mysqli_query($conn, $checkIfAdminExists);

    if (mysqli_num_rows($existingAdmin) == 0) {
    
        $insert = "INSERT INTO myglove(admin_id, admin_name, admin_email, admin_password)
                   VALUES('$admin_id', '$admin_name', '$admin_email', '$admin_password')";

        if (mysqli_query($conn, $insert)) {
            echo "<script>
                    alert('Admin Registered Successfully (First Setup)');
                    window.location.href = 'adminpage.php';
                  </script>";
            exit();
        } else {
            echo "<script>alert('Error registering admin');</script>";
        }
    } 
    else {
     
        $checkLogin = "SELECT * FROM myglove 
                       WHERE admin_id='$admin_id'
                       AND admin_name='$admin_name'
                       AND admin_email='$admin_email'
                       AND admin_password='$admin_password'";

        $result = mysqli_query($conn, $checkLogin);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>
                    alert('Login Successful');
                    window.location.href = 'adminpage.php';
                  </script>";
            exit();
        } else {
            echo "<script>alert('Incorrect credentials. Only the first admin can login.');</script>";
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Admin Page</title>
</head>
<body style="background-image: url(../images/bg2.jpg);background-repeat: no-repeat; background-size: 100% 100%; ">
    <div class="container-fluid mt-5 mb-5">
        <div class="container w-50 rounded text-light" style="box-shadow: 2px 5px 20px white;">
            <h2 class="text-center border-bottom mb-3 pb-3">Welcome to Admin Page</h2>
<form action="admin.php" method="post">
    <div class="col-md-12">
        <label for="id" class="form-label">Admin Id</label>
        <input type="text" name="admin_id" id="id" class="form-control" required>
    </div>
    <br>
    <div class="col-md-12">
        <label for="name" class="form-label">Admin Name</label>
        <input type="text" name="admin_name" id="name" class="form-control" required>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="admin_email" id="email" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="pass" class="form-label">Password</label>
            <input type="password" name="admin_password" id="pass" class="form-control" required>
        </div>
    </div>
    <br>
    <div class="col-md-4">
        <button type="submit" class="w-75 btn btn-outline-light" name="submit">Submit</button>
    </div>
    <br>
</form>

        </div>
        <br><br><br>
    </div>
</body>
</html>