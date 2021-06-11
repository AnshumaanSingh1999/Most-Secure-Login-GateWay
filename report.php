<?php
header("X-XSS-Protection: 1; mode=block");
session_start();
?>
<html>
<head>
<title>SWG</title>
        <script src="logoutbutton.js"></script>
</head>
<body>
<?php
    error_reporting(0);
if($_SESSION["username"]) {
?>
Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?>.  <button id="logout" onclick="myFunction()" type="button">Logout</button>   
<?php
}else header("Location:index.php");
?>
</body>
</html>

