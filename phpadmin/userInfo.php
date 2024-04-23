<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="userinfo.css">
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this record?");
        }
    </script>
</head>
<body>
    <h2>User Search and Management</h2>
    <form action="" method="POST">
        <input type="text" name="search" placeholder="Search by name">
        <button type="submit" name="submit">Search</button>
        <button type="submit" name="reset" onclick="form.submit()">Show All</button>
    </form>
    
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'adminresume');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, firstName, lastName, phonenumber, companyname, email, password FROM user";
    if(isset($_POST['search']) && !empty($_POST['search'])) {
        $search_term = mysqli_real_escape_string($conn, $_POST['search']);
        $sql .= " WHERE firstName LIKE '%{$search_term}%' OR lastName LIKE '%{$search_term}%' OR companyname LIKE '%{$search_term}%' OR email LIKE '%{$search_term}%'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>FName</th><th>LName</th><th>Phone Number</th><th>Company Name</th><th>Email</th><th>Edit</th><th>Delete</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["firstName"] . "</td>";
            echo "<td>" . $row["lastName"] . "</td>";
            echo "<td>" . $row["phonenumber"] . "</td>";
            echo "<td>" . $row["companyname"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td><a href='edit_user.php?id={$row['id']}'><button type='button'>Edit</button></a></td>";
            echo "<td><form method='post' onsubmit='return confirmDelete();'><input type='hidden' name='idToDelete' value='{$row['id']}'/><button type='submit' name='delete'>Delete</button></form></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Handle delete operation
    if(isset($_POST['delete'])) {
        $idToDelete = mysqli_real_escape_string($conn, $_POST['idToDelete']);
        $deleteSql = "DELETE FROM user WHERE id = {$idToDelete}";
        if ($conn->query($deleteSql) === TRUE) {
            echo "<script>alert('Record deleted successfully');</script>";
            echo "<script>window.location.href=window.location.href;</script>"; // Refresh page
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    $conn->close();
    ?>
</body>
</html>
