<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'gloves';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    
    $query = "INSERT INTO sign_up(username,email,password,contact,address) VALUES ('$user','$email','$password','$contact','$address')";

    $result = mysqli_query($conn, $query);

    if ($result){
        echo "<script>
            alert('Login Successful');
            window.location.href = 'products.php';
        </script>";
        exit();
    } else {
        echo "<script>alert('Incorrect admin credentials');</script>";
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
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Sign-up Page</title>
</head>
<body>
    <div class="container w-50 mt-4 mb-4">
    <h1 class="text-center mb-3">Sign-up Page</h1>
        <div class="modal-body bg-info rounded p-4" >
            <form method="post">
            <div class="mb-3">
              <label class="form-label" for="name">Full Name</label>
              <input type="text" class="form-control" name="username" id="name" placeholder="Enter your name" required>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                <label class="form-label" for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label" for="pass">Password</label>
                <input type="password" class="form-control" name="password" id="pass" placeholder="Create a password" required>
            </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="phone" class="form-label">Contact No</label>
                    <input type="tel" name="contact" id="phone" class="form-control">                
                </div>
                <div class="col-md-12">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" id="address" class="form-control"></textarea>
                    <br>
                </div>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary" name = "submit">Sign Up</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
