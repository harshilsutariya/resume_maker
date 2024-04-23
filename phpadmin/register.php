<?php
$connect = mysqli_connect('localhost', 'root', '', 'adminresume');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (!empty($username)) {
    // Prepare the insert query for the correct table (`admin`)
    $insert = "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($connect, $insert);
    
    if ($result) {
      // Redirect to login.php after successful insertion
      echo "<script type='text/javascript'> 
              alert('Data inserted successfully!'); 
              window.location.href = 'login.php'; 
            </script>";
    } else {
      echo "<script type='text/javascript'> alert('Failed to insert data') </script>";
    }
  } else {
    echo "<script type='text/javascript'> alert('Username is required') </script>";
  }
}
?>

<html>

<head>
  <title>form</title>
</head>

<body>
  <form method="post">
    User Name:<input type="text" name="username"><br><br>
    Email:<input type="email" name="email"><br><br>
    Password:<input type="password" name="password"><br><br>
    <input type="submit"><br><br>
    <input type="reset" value="Reset"><br>
  </form>
</body>

</html> 

