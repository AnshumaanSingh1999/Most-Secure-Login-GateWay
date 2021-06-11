<?php
header("X-XSS-Protection: 1; mode=block");
session_start();
error_reporting(0);
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$db_connection = mysqli_connect("localhost", "root", "", "infosec");
		$username = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $uname)));
		$password = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $pass)));
		$query = "SELECT * FROM details WHERE username = '" . $username. "' AND password = '" . $password . "'"; 
$result = mysqli_query($db_connection,$query);
$row = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["username"] = $row['username'];
} 
else {
$msg = "Invalid Username or Password!";
}
if(isset($_SESSION["username"])) {
header("Location:report.php");
}
?>