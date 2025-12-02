<?php



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
  <title>Login Page</title>
  <link >
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  display: flex;
  height: 100vh;
  justify-content: center;
  align-items: center;
  margin: 0;
}

.login-container {
  background-color: #fff;
  padding: 30px 40px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  width: 300px;
}

h2 {
  margin-bottom: 20px;
  text-align: center;
}

.input-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #4285F4;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-weight: bold;
}

button:hover {
  background-color: #357ae8;
}

#error-message {
  color: red;
  text-align: center;
  margin-top: 10px;
}

  </style>
</head>
<body>
  <div class="container w-25">
    <h2>User sign-up</h2>
    <form id="loginForm">
      <div class="col-md-12">
        <label for="username" class="form-label">Username</label>
        <input type="text" id="username" name="username" required class="form-control">
      </div>
      <div class="col-md-12">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control">
      </div>
      <div class="col-md-12">
        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" name="password" required class = "form-control">
      </div>
      <br>
      <button type="submit">Login</button>
      <p id="error-message"></p>
    </form>
  </div>

  <script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
  e.preventDefault(); // Prevent actual form submission

  const username = document.getElementById('username').value.trim();
  const password = document.getElementById('password').value;

  const errorMessage = document.getElementById('error-message');

  // Dummy login check (replace with real backend logic)
  if (username === 'admin' && password === 'password123') {
    errorMessage.style.color = 'green';
    errorMessage.textContent = 'Login successful!';
    // Redirect to dashboard or another page
    // window.location.href = 'dashboard.html';
  } else {
    errorMessage.style.color = 'red';
    errorMessage.textContent = 'Invalid username or password.';
  }
});

  </script>
</body>
</html>
