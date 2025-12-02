<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Order Calculator</title>
</head>
<body class="bg-light">
    <div class="container-fluid mt-4 w-50">
        <div class="row">

            <div class="col-md-6 text-start">
                <a href="products.php" class="btn btn-outline-info me-3">Go to Products</a>
        </div>
        <div class="col-md-6 text-end">
            <a href="index1.html" class="btn btn-outline-info">Back to Homepage</a>
        </div>
    </div>
</div>
    <div class="container w-50 mt-3 p-4 shadow rounded bg-white">
    <h2 class="text-center mb-4">Order Amount Calculator</h2>

    <form method="post" action="">
      <div class="mb-3">
        <label class="form-label" for="category">Item Name:</label>
        <select name="item_name" id="category" class="form-select" required>
          <option value="">Select One</option>
          <option value="Vehicle Gloves">Vehicle Gloves</option>
          <option value="Mechanic Gloves">Mechanic Gloves</option>
          <option value="Split Gloves">Split Gloves</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Quantity:</label>
        <input type="number" name="quantity" min="1" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Price per item ($):</label>
        <input type="number" name="price" step="0.01" min="0" class="form-control" required>
      </div>

      <div class="text-center">
        <input type="submit" name="submit" value="Calculate Total" class="btn btn-primary">
      </div>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $item = $_POST['item_name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $total = $quantity * $price;

        echo "<div class='mt-4 p-3 bg-light border rounded'>";
        echo "<h4 class='text-success'>Order Summary</h4>";
        echo "<p><strong>Item:</strong> $item</p>";
        echo "<p><strong>Quantity:</strong> $quantity</p>";
        echo "<p><strong>Price per item:</strong> $ $price</p>";
        echo "<hr>";
        echo "<h5><strong>Total Amount:</strong> $ $total</h5>";
        echo "</div>";
    }
    ?>
  </div>

</body>
</html>
