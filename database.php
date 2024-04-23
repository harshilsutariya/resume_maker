<?php 
$localhost = 'localhost';
$username = 'root';
$password = '';
$databasename = 'admin';
$conn = mysqli_connect("localhost", "root" ,"" , "admin");
if($conn->connect_error){
		die("Connection Failed : ". $conn->connect_error);
}
?>a