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
    $user = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['category'];
    $address = $_POST['Quantity'];
    $order = $_POST['order_type'];
    
    $query = "INSERT INTO orders(name,email,password,category,Quantity,order_type) VALUES ('$user','$email','$password','$contact','$address','$order')";

    $result = mysqli_query($conn, $query);

    if ($result){
        echo "<script>
            alert('Order Added Successfully!');
            window.location.href = 'price.php';
        </script>";
        exit();
    } else {
        echo "<script>alert('not add');</script>";
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
    <title>Document</title>
</head>
<body class="mt-5" style="background-color: black;">
    <div class="container-fluid w-50 bg-dark rounded text-light">
        <h1 class="text-light text-center fs-1 p-3" style="font-family: 'Times New Roman', Times, serif;"><i class="fa-solid fa-user-plus " style="color: #1662af;"></i> Add Order</h1>
        <form action="orders.php" method="post">
        
        <div class="col-md-12">
            <label for="id" class="form-label">Name</label>
            <input type="text" name="name" id="id" class="form-control" required>
            
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="pass" class="form-label">Password</label>
                <input type="password" name="password" id="pass" class="form-control" required>
            </div>
        
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                    <label for="category" class="form-label text-white">Select category</label>
                    <select name="category" id="category" class="form-select" required>
                    <option selected>Select One</option>
                    <option>Vehicel Gloves</option>
                    <option>Mechanic Gloves</option>
                    <option>Split Gloves</option>
                    </select>

            </div>
            <div class="col-md-3">
                <label for="qant" class="form-label">Quantity</label>
                <input type="number" name="Quantity" id="qant" min="1" class="form-control" required><br>
                </div>

            <div class="col-md-3">
                    <label for="order" class="form-label text-white">Order</label>
                    <select name="order_type" id="order" class="form-select" required>
                    <option selected>Select One</option>
                    <option>On Shop</option>
                    <option>Delivery</option>
                    </select>
            </div>
            
        </div>
        <br>
        <div class="col-md-4">
            <button type="submit" name="submit" class="btn btn-outline-light w-75">
    <i class="fa-solid fa-cart-plus"></i> Order Now
</button>

        </div>
        <br>
        </form>
    </div>
</body>
</html>