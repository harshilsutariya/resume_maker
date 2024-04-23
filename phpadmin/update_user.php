<?php
$conn = mysqli_connect('localhost', 'root', '', 'adminresume');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $companyname = mysqli_real_escape_string($conn, $_POST['companyname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);  // Consider hashing this if security is a concern

    $query = "UPDATE user SET firstName=?, lastName=?, companyname=?, email=?, password=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    if (!$stmt) {
        die('MySQL prepare error: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "sssssi", $firstName, $lastName, $companyname, $email, $password, $id);
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        // Redirect to userInfo.php to see the changes
        header("Location: userInfo.php");
        exit;
    } else {
        echo "Error updating record: " . mysqli_stmt_error($stmt);
    }
}
?>
