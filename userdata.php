<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'gloves';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM sign_up ORDER BY id ASC"; 
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<div class='container mt-5'>";
    echo "<h2 class='text-light text-center'>Submitted Entries</h2>";
    echo "<table border='2' class='table table-bordered table-striped table-dark'>";
    echo "<thead ><tr>
            <th >ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Contact No</th>
            <th>Address</th>
        </tr></thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . htmlspecialchars($row['id']) . "</td>
                <td>" . htmlspecialchars($row['username']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
                <td>" . htmlspecialchars($row['password']) . "</td>
                <td>" . htmlspecialchars($row['contact']) . "</td>
                <td>" . htmlspecialchars($row['address']) . "</td>
            </tr>";
    }

    echo "</tbody></table></div>";
} else {
    echo "<p class='text-light text-center'>No data found.</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
        <style>
        body {
            background-color: #1c1f24;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h2 {
            margin-bottom: 30px;
            font-weight: 600;
        }

        table {
            border-radius: 8px;
            overflow: hidden;
        }

        thead {
            background-color: #343a40;
        }

        thead th {
            color: #ffc107;
            font-size: 1rem;
            text-align: center;
        }

        tbody td {
            text-align: center;
            vertical-align: middle;
        }

        .container {
            max-width: 1000px;
        }

        tr:hover {
            background-color: #2c2f36;
        }
    </style>
</head>
<body>
    
</body>
</html>