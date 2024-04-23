<?php
$conn = mysqli_connect('localhost', 'root', '', 'adminresume');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if an ID was passed
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center; /* This will center the form vertically */
            min-height: 100vh; /* Minimum height to take full viewport height */
            margin: 0; /* Remove default body margin */
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
            justify-content: center;
            align-items: center; 
            
            /* Max width and width 100% will help in responsive design */
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: block; /* Make the button a block element */
            width: 100%; Button width full to container
            margin-top: 10px; /* Margin top for spacing */

        }
        button:hover {
            background-color: #45a049;
        }
        p {
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <?php if($user): ?>
        <form action="update_user.php" method="post">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">
    <input type="text" name="firstName" value="<?php echo htmlspecialchars($user['firstName']); ?>">
    <input type="text" name="lastName" value="<?php echo htmlspecialchars($user['lastName']); ?>">
    <input type="text" name="companyname" value="<?php echo htmlspecialchars($user['companyname']); ?>">
    <input type="text" name="email" value="<?php echo htmlspecialchars($user['email']); ?>">
    <input type="text" name="password" value="<?php echo htmlspecialchars($user['password']); ?>">
    <button type="submit">Update</button>
</form>

    <?php else: ?>  
    <p>User not found.</p>
    <?php endif; ?>
</body>
</html>
