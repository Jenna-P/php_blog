<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "blog";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

$msg = "Connected Successfully";
echo "<script type='text/javascript'>console.log('$msg');</script>";

$user = $_POST["username"];
$pass = $_POST["password"];


$sql = "SELECT * FROM `user` WHERE username='$user' AND pw='$pass'";
$result = mysqli_query($conn, $sql);
$row = $result->num_rows; 

if($row > 0) {
    // Login Handling
    require('_loginOk.php');
    echo "<script>location.href='index.php'</script>";
} else {
    echo "<script>alert('Check Username or password');location.href='login.php'</script>";
}   

 $conn -> close();

?>
