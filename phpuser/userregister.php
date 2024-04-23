<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminresume";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $companyName = $_POST['companyName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email is already registered
    $query = "SELECT email FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<script>alert('Email already exists. Please choose a different one.');</script>";
    } else {
        // Insert user data into database
        $sql = "INSERT INTO `user`(`firstName`, `lastName`, `phonenumber`, `companyname`, `email`, `password`) 
                VALUES ('$firstName', '$lastName', '$phoneNumber', '$companyName', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration successful.'); window.location.href = 'userlogin.php';</script>";
            exit; // Stop further execution
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>




<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
}

.background-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
}

.form-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 600px; /* Adjust width to fit two fields side by side */
    background-color: rgba(255, 255, 255, 0.9); /* Set background opacity */
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 30px;
}

.form-group {
    display: flex;
    margin-bottom: 20px;
    align-items: center; /* Center-align items vertically */

}

.form-group label {
    flex: 1;
    margin-right: 10px;
    text-align: center;
}

.form-group input {
    flex: 2;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    width: 100%;
    background-color: #4caf50;
    color: white;
    padding: 14px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

#user-availability-status {
    font-size: 12px;
    color: #777;
}

    </style>
</head>
<body>
    <div class="container">
        <video autoplay loop muted class="background-video">
            <source src="1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="form-container"> <!-- Wrap the form in a div for styling -->
            <h2>User Registration Form</h2>
            <form id="registrationForm" method="post" onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Phone Number:</label>
                    <input type="text" id="phoneNumber" name="phoneNumber" required>
                </div>
                <div class="form-group">
                    <label for="companyName">Company Name:</label>
                    <input type="text" id="companyName" name="companyName" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required onBlur="checkAvailability()">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>

    <script>
    function validateForm() {
        var firstName = document.getElementById('firstName').value;
        var lastName = document.getElementById('lastName').value;
        var phoneNumber = document.getElementById('phoneNumber').value;
        var companyName = document.getElementById('companyName').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        // Simple validation for required fields
        if (firstName == "" || lastName == "" || phoneNumber == "" || companyName == "" || email == "" || password == "") {
            alert("Please fill out all required fields.");
            return false;
        }

        // Validate phone number length
        if (phoneNumber.length !== 10) {
            alert("Phone number must be 10 digits long.");
            return false;
        }

        // You can add more complex validation rules here if needed

        return true; // Form will be submitted if all validation passes
    }
</script>

</body>


</html>
