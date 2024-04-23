<?php
$connect = mysqli_connect('localhost', 'root', '', 'adminresume');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($connect, $query);

        if ($result && mysqli_num_rows($result) == 1) {
            echo "<script>
                    alert('Login Successfully!');
                    window.location.href = '../index.php';
                  </script>";
            exit;
        } else {
            echo "<script>
                    alert('Incorrect email or password!');
                    window.location.href = 'login.php'; // Redirect back to login page
                  </script>";
            exit;
        }
    } else {
        echo "<script>
                alert('Email and password are required fields');
                window.location.href = 'login.php'; // Redirect back to login page
              </script>";
        exit;
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
    <Form method="POST">
  <div class="app">
      <video autoplay loop muted class="background-video">
        <source src="1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    <div class="login-form">
      <div class="title">Sign In</div>
      <!-- Form starts here -->
      <div class="form">
        <form id="login-form">
          <div class="input-container">
            <input type="text" placeholder="email" name="email" required>
            <div class="error" id="uname-error"></div>
          </div>
          <div class="input-container">
            <input type="password" placeholder="password" name="password" required>
            <div class="error" id="pass-error"></div>
          </div>
          <div class="button-container">
            <input type="submit">
          </div>
        </form>
      </div>
      <!-- Form ends here -->
    </div>
  </div>
</Form>
</body>

</html>
