<?php

require('_conn.php');

$user = $_POST["username"];
$pass = $_POST["password"];
$email = $_POST["email"];
$pwc = $_POST['checkPassword'];

 // username already exist
 $sql = "SELECT * FROM `user` WHERE id='$id'";
 $result = mysqli_query($conn, $sql);
 $row = $result->num_rows; 
 if($row > 0) {
    
     echo "<script>alert('There are already same username.');location.href='signUp.php'</script>";
 }

 // not same 1pw and 2pw
 if ($pass != $pwc) {
     echo "<script>alert('Check password.');location.href='signUp.php'</script>";
 }

$sql = "INSERT INTO `user` (`id`,`username`,`email`, `pw`) VALUE (NULL, '$user', '$email', '$pass')";
$result = mysqli_query($conn, $sql);
$row = $result->num_rows; 

if($result) {
    // after signup goin to 
    require('_loginok.php');
    echo "<script>alert('Signed in successfully!');location.href='index.php'</script>";
} else {
    echo "<script>alert('Fail, Please try again');location.href='join.php'</script>";
}   

 $conn -> close();

?>
