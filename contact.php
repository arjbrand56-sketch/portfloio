<?php
// Database Connection
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'gloves';

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn) {
    die("Connection failed: " . mysqli_connect_error());


// Form Submission
if (isset($_POST['submit'])) {
    $a = $_POST['username'];
    $b = $_POST['email'];
    $c = $_POST['address'];

    $query = "INSERT INTO contact(username, email, address) VALUES ('$a', '$b', '$c')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
                alert('Message Submitted Successfully!');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "<script>alert('Message Not Sent!');</script>";
    }
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
<title>Contact Us Page</title>
</head>
<body style="background-image: url(./images/—Pngtree—close-up\ of\ intricate\ black\ and_16547373.png); background-repeat: no-repeat; background-size: cover;">
<div class="container my-5">
    <h2 class="text-center text-light mb-4" id="contactus">Contact Us</h2>
    <div class="row g-4">
        <!-- Form Column -->
        <div class="col-md-7" style="background-image: url(../images/bg2.jpg);background-repeat: no-repeat; background-size: 100% 100%;">
            <div class="contact-form text-light p-3">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>

        <!-- Map Column -->
        <div class="col-md-5">
            <div class="h-100">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019317327572!2d-122.41941518468143!3d37.77492977975944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c89e8eebf%3A0xc0d6d3d9e7e2e225!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1634629720434!5m2!1sen!2sus"
                    width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                <div class="location-box text-light mt-3">
                    <h5>Your Current Location</h5>
                    <p id="current-location">Click the button below to get your location.</p>
                    <button class="btn btn-outline-light btn-sm" onclick="getLocation()">Show My Location</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        document.getElementById("current-location").innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    document.getElementById("current-location").innerHTML = 
        "Latitude: " + position.coords.latitude + 
        "<br>Longitude: " + position.coords.longitude;
}
</script>

</body>
</html>