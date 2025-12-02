<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body {
      background-color: #f8f9fa;
      overflow-x: hidden;
    }

    /* Sidebar */
    .admin-sidebar {
      min-height: 100vh;
      background-color: #343a40;
      color: white;
    }

    .admin-sidebar .nav-link {
      color: #ddd;
      margin: 0.5rem 0;
    }

    .admin-sidebar .nav-link:hover, 
    .admin-sidebar .nav-link.active {
      background-color: #495057;
      border-radius: 5px;
      color: #fff;
    }

    /* Main content */
    .admin-content {
      padding: 30px;
    }

    .card {
      border-radius: 10px;
    }

    @media (max-width: 768px) {
      .admin-sidebar {
        min-height: auto;
        padding: 1rem;
      }
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <!-- Sidebar -->
    <nav class="col-md-3 col-lg-2 d-md-block admin-sidebar p-3">
      <h4 class="text-white mb-4"><i class="fa-solid fa-user-shield me-2"></i>Admin Panel</h4>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#"><i class="fa-solid fa-chart-line me-2"></i>Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php"><i class="fa-solid fa-box me-2"></i>Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userdata.php"><i class="fa-solid fa-users me-2"></i>Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="orderfetch.php"><i class="fa-solid fa-clipboard-list me-2"></i>Orders</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-gear me-2"></i>Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myprofile.php"><i class="fa-regular fa-address-card me-2" style="color: #f8f9fc;"> </i>Admin Profile</a>
        </li>
        <li class="nav-item mt-3">
          <a class="nav-link text-danger" href="#"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a>
        </li>
      </ul>
    </nav>

    <!-- Main Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 admin-content">
      <h2>Welcome, Admin</h2>
      <p class="text-muted">Overview of recent activity</p>

      <!-- Cards -->
      <div class="row g-4 mb-4">
        <div class="col-md-4">
          <div class="card shadow-sm text-white bg-primary">
            <div class="card-body">
              <h5 class="card-title">Total Users</h5>
              <?php 
              $servername = 'localhost';
$username = 'root';
$password = '';
$database = 'gloves';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT COUNT(*) AS total FROM sign_up"; 
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo "<p class='card-text fs-4'><i class='fa-solid fa-users me-2'></i> " . $row['total'] . "</p>";
}


               ?>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm text-white bg-success">
            <div class="card-body">
              <h5 class="card-title">Total Orders</h5>
                            <?php 
              $servername = 'localhost';
$username = 'root';
$password = '';
$database = 'gloves';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT COUNT(*) AS total FROM orders"; 
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo "<p class='card-text fs-4'> " . $row['total'] . "</p>";
}


               ?>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm text-white bg-warning">
            <div class="card-body">
              <h5 class="card-title">Revenue</h5>
                                          <?php 
              $servername = 'localhost';
$username = 'root';
$password = '';
$database = 'gloves';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT COUNT(*) AS total FROM orders"; 
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo "<p class='card-text fs-4'> " . $row['total'] . "</p>";
}


               ?>
            </div>
          </div>
        </div>
      </div>

    
        
    </main>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>