<?php
$connect = mysqli_connect('localhost', 'root', '', 'adminresume');

if (!empty($_POST["email"])) {
    $email = $_POST["email"];
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo "error : You did not enter a valid email.";
    } else {
        $query = "SELECT email FROM user WHERE email = '$email'";
        $result = mysqli_query($connect, $query);
        
        if ($result && mysqli_num_rows($result) > 0) {
            echo "<span style='color:red'>Email already exists.</span>";
            echo "<script>$('#submit').prop('disabled', true);</script>";
        } else {
            echo "<span style='color:green'>Email available for Registration.</span>";
            echo "<script>$('#submit').prop('disabled', false);</script>";
        }
    }
}
?>
